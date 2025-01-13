<!-- resources/views/profile/partials/user-dashboard.blade.php -->
<div>
    <h3 class="text-lg font-medium text-gray-900 ">{{ __('User Dashboard') }}</h3>
    <p class="mt-2 text-sm text-gray-600 ">
        {{ __('Welcome to your user dashboard. Here you can view your profile information, update your settings, and more.') }}
    </p>
    <!-- Add user-specific content here -->
    <div class="mt-4">
        <a href="#" class="text-indigo-600 ">{{ __('View Profile') }}</a>
    </div>
    <div class="mt-2">
        <a href="#" class="text-indigo-600 ">{{ __('Update Settings') }}</a>
    </div>
    <!-- Add more user-specific links and content as needed -->
</div>
