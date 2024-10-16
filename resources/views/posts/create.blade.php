<x-layout meta-title="Create a new post" meta-description="Form to create a new Post">


    <h1>{{ __('Create a new Post') }}</h1>

    <form method="post" action="{{route('posts.store')}}">
        @csrf

        @include('posts.form-fields')
        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>
    <a href="{{route('posts.index')}}">{{__('Back')}}</a>
</x-layout>
