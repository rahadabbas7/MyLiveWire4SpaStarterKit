<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Dashboard')] class extends Component
{
    public function logout()
    {
        Auth::guard('web')->logout();
        session()->invalidate();
        session()->regenerateToken();

        return $this->redirect(route('welcome'), navigate: true);
    }
};
?>

<div class="space-y-6">
    <!-- Header Card -->
    <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-xs flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-50 border border-emerald-200 text-xs font-semibold text-emerald-700 mb-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                Active Session
            </div>
            <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">
                Welcome back, {{ auth()->user()->name }}!
            </h1>
            <p class="mt-1 text-sm text-slate-500">
                You are securely logged into your personal dashboard (Livewire 4 Page SFC).
            </p>
        </div>

        <div class="flex items-center gap-3">
            <button wire:click="logout" 
                    type="button" 
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 border border-red-200 transition cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Log Out</span>
            </button>
        </div>
    </div>

    <!-- Quick Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <!-- Stat 1 -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs">
            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Account ID</div>
            <div class="mt-2 text-2xl font-bold text-slate-900">#{{ auth()->user()->id }}</div>
            <div class="mt-1 text-xs text-slate-500">Unique user identifier</div>
        </div>

        <!-- Stat 2 -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs">
            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Email Address</div>
            <div class="mt-2 text-base font-semibold text-slate-900 truncate" title="{{ auth()->user()->email }}">{{ auth()->user()->email }}</div>
            <div class="mt-1 text-xs text-emerald-600 font-medium flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span>Primary Contact</span>
            </div>
        </div>

        <!-- Stat 3 -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs">
            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Member Since</div>
            <div class="mt-2 text-lg font-bold text-slate-900">{{ auth()->user()->created_at?->format('M d, Y') ?? 'Today' }}</div>
            <div class="mt-1 text-xs text-slate-500">{{ auth()->user()->created_at?->diffForHumans() ?? 'Just joined' }}</div>
        </div>

        <!-- Stat 4 -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs">
            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Security State</div>
            <div class="mt-2 text-base font-semibold text-slate-900">Encrypted (Bcrypt)</div>
            <div class="mt-1 text-xs text-emerald-600 font-medium">Password Protected</div>
        </div>
    </div>

    <!-- Account Details Panel -->
    <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-xs">
        <h3 class="text-base font-semibold text-slate-900 mb-4">Account Profile</h3>
        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4 text-sm">
            <div class="border-t border-slate-100 pt-3">
                <dt class="text-slate-500">Display Name</dt>
                <dd class="mt-1 font-medium text-slate-900">{{ auth()->user()->name }}</dd>
            </div>
            <div class="border-t border-slate-100 pt-3">
                <dt class="text-slate-500">Email Address</dt>
                <dd class="mt-1 font-medium text-slate-900">{{ auth()->user()->email }}</dd>
            </div>
            <div class="border-t border-slate-100 pt-3">
                <dt class="text-slate-500">Architecture</dt>
                <dd class="mt-1 font-medium text-slate-900">Livewire 4 Page Component (SFC)</dd>
            </div>
            <div class="border-t border-slate-100 pt-3">
                <dt class="text-slate-500">Database Engine</dt>
                <dd class="mt-1 font-medium text-slate-900">SQLite (Zero-Config)</dd>
            </div>
        </dl>
    </div>
</div>
