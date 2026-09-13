<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Welcome')] class extends Component
{
    //
};
?>

<div class="py-12">
    <!-- Hero Section -->
    <div class="text-center max-w-3xl mx-auto">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-200 text-xs font-semibold text-indigo-700 mb-6">
            <span class="inline-block w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span>
            Laravel 13 &bull; Livewire 4 &bull; Tailwind CSS v4
        </div>

        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 leading-tight">
            Minimalist, Reactive Full-Stack Starter
        </h1>

        <p class="mt-4 text-lg text-slate-600 leading-relaxed">
            A clean, streamlined baseline built with native Livewire 4 Single-File Page Components, pure Tailwind CSS v4, and zero third-party bloat.
        </p>

        <div class="mt-8 flex items-center justify-center gap-4">
            @auth
                <a href="{{ route('dashboard') }}" 
                   wire:navigate
                   class="inline-flex items-center gap-2 px-5 py-3 rounded-xl text-base font-medium bg-indigo-600 text-white shadow-sm hover:bg-indigo-700 transition">
                    <span>Go to Dashboard</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            @else
                <a href="{{ route('register') }}" 
                   wire:navigate
                   class="inline-flex items-center gap-2 px-5 py-3 rounded-xl text-base font-medium bg-indigo-600 text-white shadow-sm hover:bg-indigo-700 transition">
                    <span>Create Account</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a href="{{ route('login') }}" 
                   wire:navigate
                   class="inline-flex items-center px-5 py-3 rounded-xl text-base font-medium text-slate-700 bg-white border border-slate-200 shadow-xs hover:bg-slate-50 transition">
                    Sign In
                </a>
            @endauth
        </div>
    </div>

    <!-- Feature Grid -->
    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Feature 1 -->
        <div class="p-6 bg-white rounded-2xl border border-slate-200/80 shadow-xs">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            <h3 class="text-base font-semibold text-slate-900">Native Livewire 4 SFC</h3>
            <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                Page components located in <code class="text-xs bg-slate-100 px-1 py-0.5 rounded text-slate-800">resources/views/pages</code> combining PHP logic and Blade templates in one file.
            </p>
        </div>

        <!-- Feature 2 -->
        <div class="p-6 bg-white rounded-2xl border border-slate-200/80 shadow-xs">
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
            </div>
            <h3 class="text-base font-semibold text-slate-900">Clean Authentication</h3>
            <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                Built-in session authentication, rate-limiting, and validation without third-party boilerplate.
            </p>
        </div>

        <!-- Feature 3 -->
        <div class="p-6 bg-white rounded-2xl border border-slate-200/80 shadow-xs">
            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center mb-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                </svg>
            </div>
            <h3 class="text-base font-semibold text-slate-900">Tailwind CSS v4</h3>
            <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                Ultra-fast stylesheet compilation powered by modern Vite integration and pure CSS variables.
            </p>
        </div>
    </div>
</div>
