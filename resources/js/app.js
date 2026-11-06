import Alpine from 'alpinejs';
import { createIcons, icons } from 'lucide';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;

/**
 * EXPROSA Sector 05 — Industrial & Manufacturing
 * UI/UX ProMax + Framer Motion Physics + Adaptive 3D CAD Stage + ScrollTrigger + Metallic Spark Particles
 * 100% Compliant with Hallmark (The Floor) & PRD Addendum v1.1
 */
const capabilities = {
    webgl: false,
    reducedMotion: false,
    isPointer: false,
    isMobile: false,
    isTablet: false,
    isDesktop: false,
};

function detectCapabilities() {
    document.documentElement.classList.add('js');

    capabilities.reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    capabilities.isPointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    const width = window.innerWidth;
    capabilities.isMobile = width < 768;
    capabilities.isTablet = width >= 768 && width < 1024;
    capabilities.isDesktop = width >= 1024;

    if (capabilities.reducedMotion) {
        document.documentElement.classList.add('reduced-motion');
    }

    try {
        const testCanvas = document.createElement('canvas');
        capabilities.webgl = Boolean(
            window.WebGLRenderingContext &&
                (testCanvas.getContext('webgl') || testCanvas.getContext('experimental-webgl'))
        );
    } catch (e) {
        capabilities.webgl = false;
    }

    if (!capabilities.webgl) {
        document.documentElement.classList.add('no-webgl');
    }
}

// 1. ADAPTIVE LENIS SMOOTH SCROLL (Synced with GSAP Ticker & ScrollTrigger)
let lenis = null;
function initLenis() {
    if (capabilities.reducedMotion) return;

    try {
        lenis = new Lenis({
            duration: capabilities.isMobile ? 0.95 : 1.12,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1.0,
            touchMultiplier: 1.15,
        });

        lenis.on('scroll', ScrollTrigger.update);

        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });

        gsap.ticker.lagSmoothing(0);
    } catch (e) {
        // Fallback to native browser scroll silently
    }
}

// 2. ADAPTIVE METALLIC SPARK & LASER DUST PARTICLES (#hero-particle-canvas)
let particleAnimId = null;
let isParticleVisible = false;

function initHeroParticles() {
    const canvas = document.getElementById('hero-particle-canvas');
    if (!canvas) return;

    if (capabilities.reducedMotion) {
        canvas.style.display = 'none';
        return;
    }

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width = (canvas.width = canvas.parentElement ? canvas.parentElement.offsetWidth : window.innerWidth);
    let height = (canvas.height = canvas.parentElement ? canvas.parentElement.offsetHeight : window.innerHeight);

    window.addEventListener('resize', () => {
        if (!canvas.parentElement) return;
        width = canvas.width = canvas.parentElement.offsetWidth;
        height = canvas.height = canvas.parentElement.offsetHeight;
    });

    // Tiered particle count: Desktop 34, Tablet 14, Mobile 8
    const count = capabilities.isMobile ? 8 : capabilities.isTablet ? 14 : 34;
    const particles = [];

    for (let i = 0; i < count; i++) {
        particles.push({
            x: Math.random() * width,
            y: Math.random() * height,
            radius: Math.random() * 1.6 + 0.5,
            speedY: Math.random() * 0.45 + 0.12,
            speedX: (Math.random() - 0.5) * 0.3,
            alpha: Math.random() * 0.45 + 0.15,
            color: i % 3 === 0 ? '197, 160, 89' : '244, 241, 234',
        });
    }

    function renderParticles() {
        if (!isParticleVisible || document.hidden) {
            particleAnimId = null;
            return;
        }

        ctx.clearRect(0, 0, width, height);

        for (let i = 0; i < particles.length; i++) {
            const p = particles[i];
            p.y -= p.speedY;
            p.x += p.speedX;

            if (p.y < -8) {
                p.y = height + 8;
                p.x = Math.random() * width;
            }
            if (p.x < -8) p.x = width + 8;
            if (p.x > width + 8) p.x = -8;

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${p.color}, ${p.alpha})`;
            ctx.fill();
        }

        particleAnimId = requestAnimationFrame(renderParticles);
    }

    function startParticleLoop() {
        if (!particleAnimId && isParticleVisible && !document.hidden) {
            particleAnimId = requestAnimationFrame(renderParticles);
        }
    }

    function stopParticleLoop() {
        if (particleAnimId) {
            cancelAnimationFrame(particleAnimId);
            particleAnimId = null;
        }
    }

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    isParticleVisible = entry.isIntersecting;
                    if (isParticleVisible) {
                        startParticleLoop();
                    } else {
                        stopParticleLoop();
                    }
                });
            },
            { threshold: 0.05 }
        );
        observer.observe(canvas);
    } else {
        isParticleVisible = true;
        startParticleLoop();
    }

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopParticleLoop();
        } else if (isParticleVisible) {
            startParticleLoop();
        }
    });
}

// 3. INTERACTIVE 3D CAD / CNC COMPONENT STAGE WITH LERP PHYSICS
let stageAnimId = null;
let isStageVisible = false;

function initHeroStage3D() {
    const stageWrapper = document.getElementById('hero-3d-stage-wrapper');
    const stageCard = document.getElementById('hero-3d-stage-card');
    if (!stageWrapper || !stageCard) return;

    if (capabilities.reducedMotion) {
        stageCard.style.transform = 'none';
        return;
    }

    let targetRotX = 0;
    let targetRotY = 0;
    let currentRotX = 0;
    let currentRotY = 0;
    let isHovering = false;

    if (capabilities.isPointer && !capabilities.isMobile) {
        stageWrapper.addEventListener('mouseenter', () => {
            isHovering = true;
        });

        stageWrapper.addEventListener('mousemove', (e) => {
            const rect = stageWrapper.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            targetRotX = ((y - centerY) / centerY) * -9;
            targetRotY = ((x - centerX) / centerX) * 11;

            const spotlight = document.getElementById('hero-stage-spotlight');
            if (spotlight) {
                const pctX = (x / rect.width) * 100;
                const pctY = (y / rect.height) * 100;
                spotlight.style.background = `radial-gradient(circle at ${pctX}% ${pctY}%, rgba(197, 160, 89, 0.2) 0%, rgba(197, 160, 89, 0.03) 50%, transparent 75%)`;
                spotlight.style.opacity = '1';
            }
        });

        stageWrapper.addEventListener('mouseleave', () => {
            isHovering = false;
            targetRotX = 0;
            targetRotY = 0;

            const spotlight = document.getElementById('hero-stage-spotlight');
            if (spotlight) {
                spotlight.style.opacity = '0';
            }
        });
    } else if (capabilities.isMobile) {
        // Gentle ambient 3D oscillation on mobile
        gsap.to(stageCard, {
            rotateX: -3,
            rotateY: 4,
            y: -5,
            duration: 3.4,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
        });
        return;
    }

    const layers = stageCard.querySelectorAll('[data-stage-depth]');

    function renderStage() {
        if (!isStageVisible || document.hidden) {
            stageAnimId = null;
            return;
        }

        const ease = isHovering ? 0.085 : 0.05;
        currentRotX += (targetRotX - currentRotX) * ease;
        currentRotY += (targetRotY - currentRotY) * ease;

        stageCard.style.transform = `perspective(1400px) rotateX(${currentRotX.toFixed(2)}deg) rotateY(${currentRotY.toFixed(2)}deg)`;

        for (let i = 0; i < layers.length; i++) {
            const layer = layers[i];
            const depth = parseFloat(layer.getAttribute('data-stage-depth') || '35');
            const offsetX = (currentRotY / 11) * (depth * 0.28);
            const offsetY = (currentRotX / -9) * (depth * 0.28);
            layer.style.transform = `translate3d(${offsetX.toFixed(1)}px, ${offsetY.toFixed(1)}px, ${depth}px)`;
        }

        stageAnimId = requestAnimationFrame(renderStage);
    }

    function startStageLoop() {
        if (!stageAnimId && isStageVisible && !document.hidden) {
            stageAnimId = requestAnimationFrame(renderStage);
        }
    }

    function stopStageLoop() {
        if (stageAnimId) {
            cancelAnimationFrame(stageAnimId);
            stageAnimId = null;
        }
    }

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    isStageVisible = entry.isIntersecting;
                    if (isStageVisible) {
                        startStageLoop();
                    } else {
                        stopStageLoop();
                    }
                });
            },
            { threshold: 0.05 }
        );
        observer.observe(stageWrapper);
    } else {
        isStageVisible = true;
        startStageLoop();
    }

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopStageLoop();
        } else if (isStageVisible) {
            startStageLoop();
        }
    });
}

// 4. FRAMER-PHYSICS 3D CARD TILT & TOUCH FEEDBACK ([data-tilt-3d])
function init3DTilt() {
    if (capabilities.reducedMotion) return;

    const tiltElements = document.querySelectorAll('[data-tilt-3d]');

    tiltElements.forEach((el) => {
        if (capabilities.isPointer && !capabilities.isMobile) {
            const maxAngle = parseFloat(el.getAttribute('data-tilt-max') || '6');
            const depth = parseFloat(el.getAttribute('data-tilt-depth') || '10');

            el.addEventListener('mousemove', (e) => {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = ((y - centerY) / centerY) * -maxAngle;
                const rotateY = ((x - centerX) / centerX) * maxAngle;

                el.style.transform = `perspective(1100px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateZ(${depth}px)`;

                const glare = el.querySelector('.tilt-glare');
                if (glare) {
                    const pctX = (x / rect.width) * 100;
                    const pctY = (y / rect.height) * 100;
                    glare.style.background = `radial-gradient(circle at ${pctX}% ${pctY}%, rgba(197, 160, 89, 0.14) 0%, rgba(197, 160, 89, 0.02) 48%, transparent 72%)`;
                    glare.style.opacity = '1';
                }
            });

            el.addEventListener('mouseleave', () => {
                el.style.transform = 'perspective(1100px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
                const glare = el.querySelector('.tilt-glare');
                if (glare) {
                    glare.style.opacity = '0';
                }
            });
        } else {
            el.addEventListener(
                'touchstart',
                () => {
                    el.style.transform = 'scale(0.985)';
                },
                { passive: true }
            );
            el.addEventListener(
                'touchend',
                () => {
                    el.style.transform = 'scale(1)';
                },
                { passive: true }
            );
        }
    });
}

// 5. MAGNETIC CONTROLS ([data-magnetic])
function initMagneticButtons() {
    if (!capabilities.isPointer || capabilities.isMobile || capabilities.reducedMotion) return;

    document.querySelectorAll('[data-magnetic]').forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            gsap.to(btn, {
                x: x * 0.24,
                y: y * 0.24,
                duration: 0.28,
                ease: 'power2.out',
            });
        });

        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                x: 0,
                y: 0,
                duration: 0.45,
                ease: 'elastic.out(1, 0.35)',
            });
        });
    });
}

// 6. FAIL-SAFE GSAP SCROLLTRIGGER SECTION & IMAGE REVEALS
function initScrollAnimations() {
    if (capabilities.reducedMotion) return;

    // Staggered card & specification row reveals (Fail-safe: never locks opacity at 0)
    document.querySelectorAll('[data-reveal="stagger"]').forEach((container) => {
        const items = Array.from(container.children);
        if (!items.length) return;

        gsap.fromTo(
            items,
            { y: 24, opacity: 1 },
            {
                scrollTrigger: {
                    trigger: container,
                    start: 'top 90%',
                    toggleActions: 'play none none none',
                },
                y: 0,
                opacity: 1,
                duration: 0.65,
                stagger: 0.07,
                ease: 'power3.out',
                clearProps: 'transform,opacity',
            }
        );
    });

    // Section fade-up translation
    document.querySelectorAll('[data-reveal="fade-up"]').forEach((el) => {
        gsap.fromTo(
            el,
            { y: 22 },
            {
                scrollTrigger: {
                    trigger: el,
                    start: 'top 92%',
                    toggleActions: 'play none none none',
                },
                y: 0,
                duration: 0.7,
                ease: 'power3.out',
                clearProps: 'transform',
            }
        );
    });

    // Image frame optical focus & scale settle reveal
    document.querySelectorAll('[data-reveal="image"]').forEach((imgWrapper) => {
        const img = imgWrapper.querySelector('img');
        if (!img) return;

        gsap.fromTo(
            img,
            { scale: 1.06, filter: 'blur(3px)' },
            {
                scrollTrigger: {
                    trigger: imgWrapper,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                },
                scale: 1,
                filter: 'blur(0px)',
                duration: 0.85,
                ease: 'power2.out',
                clearProps: 'transform,filter',
            }
        );
    });

    // Parallax depth layers
    document.querySelectorAll('[data-parallax]').forEach((el) => {
        const speed = parseFloat(el.getAttribute('data-parallax') || '0.1');
        const travel = capabilities.isMobile ? speed * 24 : speed * 65;

        gsap.to(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
            },
            y: travel,
            ease: 'none',
        });
    });

    window.addEventListener('load', () => {
        ScrollTrigger.refresh();
    });
}

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    detectCapabilities();
    createIcons({ icons });
    initLenis();
    initHeroParticles();
    initHeroStage3D();
    init3DTilt();
    initMagneticButtons();
    initScrollAnimations();
});

window.refreshIcons = () => {
    createIcons({ icons });
};
