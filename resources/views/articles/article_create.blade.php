@extends('layouts.app')
@section('title','Создание статьи')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    <link rel="stylesheet"   href="https://unpkg.com/@tailwindcss/typography@0.4.x/dist/typography.min.css">
@endpush
@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-rows-1 px-5 xl:px-0">
        <div class="container">
            <form class="mt-5" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block   text-sm sm:text-2xl  font-medium text-black">Название статьи</label>
                    <input required type="text" name="title" id="title" autocomplete="title" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>
                <div class="mb-6">
                    <label for="text" class="block   text-sm sm:text-2xl  font-medium text-black">Информация</label>
                    <div class="mt-1 NunitoSans">
                         <textarea id="markdown-editor" class="block w-full mt-1 rounded-md NunitoSans" name="description"
                                   rows="3"></textarea>
                    </div>
                </div>
                <button class="bg-black text-white px-8  text-sm sm:text-xl  rounded-2xl py-3" type="submit">Создать</button>
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
