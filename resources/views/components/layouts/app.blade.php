@props([
    'title' => null,
    'description' => null,
])

@include('layouts.app', [
    'title' => $title,
    'description' => $description,
    'slot' => $slot,
])
