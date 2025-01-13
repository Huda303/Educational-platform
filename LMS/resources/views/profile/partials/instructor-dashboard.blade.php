<!-- resources/views/profile/partials/instructor-dashboard.blade.php -->
<div>
    <h3 class="text-lg font-medium text-gray-900">{{ __('Instructor Dashboard') }}</h3>
    <p class="mt-2 text-sm text-gray-600">
        {{ __('Welcome to your instructor dashboard. Here you can manage your courses, view analytics, and more.') }}
    </p>
    <!-- Add instructor-specific content here -->
    <div class="mt-4">
        <a href="{{ route('insetructorDash') }}" class="text-teal-800 hover:text-teal-600">{{ __('Manage Courses') }}</a>
    </div>
    <div class="mt-2">
        <a href="#" class="text-teal-800 hover:text-teal-600">{{ __('View Analytics') }}</a>
    </div>
    <!-- Add more instructor-specific links and content as needed -->
</div>
