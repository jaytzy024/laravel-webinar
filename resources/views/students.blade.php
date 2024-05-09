<x-app-layout>
    @if (Auth::user()->role == 'teacher')
<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <h1>teacher component
</div>
    @endif

</x-app-layout>
