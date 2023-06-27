@extends('layouts.app')
@section('title','Создание статьи')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    <link rel="stylesheet"   href="https://unpkg.com/@tailwindcss/typography@0.4.x/dist/typography.min.css">
@endpush
@section('content')
    <div class="mx-auto grid h-full max-w-7xl grid-rows-1 px-5 pt-5 xl:px-0">
        <div class="container">
            <form class="mt-5" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-black sm:text-2xl">Название статьи</label>
                    <input required type="text" name="title" id="title" autocomplete="title" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:text-sm sm:leading-6">
                </div>
                <div class="mb-6">
                    <label for="text" class="block text-sm font-medium text-black sm:text-2xl">Информация</label>
                    <div class="mt-1 NunitoSans">
                         <textarea id="markdown-editor" class="mt-1 block w-full rounded-md NunitoSans" name="description"
                                   rows="3"></textarea>
                    </div>
                </div>
                <button class="rounded-2xl bg-black px-8 py-3 text-sm text-white sm:text-xl" type="submit">Создать</button>
            </form>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
        <script>
            const easyMDE = new EasyMDE({
                showIcons: ['strikethrough', 'code', 'table', 'redo', 'heading', 'undo', 'heading-bigger', 'heading-smaller', 'heading-1', 'heading-2', 'heading-3', 'clean-block', 'horizontal-rule'],
                element: document.getElementById('markdown-editor')});
        </script>
    @endpush
@endsection
