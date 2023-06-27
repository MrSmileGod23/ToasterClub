@extends('layouts.app')
@section('title','Галерея')


@section('content')
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">

        @guest()

            <p class="text-center text-2xl">Чтобы добавлять фотографии,нужно авторизоваться</p>

        @endguest
        @auth()
            <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="mb-2">
                    <label for="gallery" class="block text-sm font-medium text-black sm:text-2xl">Добавить фотографию</label>
                    <input type="file" name="gallery" id="gallery" class="@error('gallery') is-invalid @enderror block mt-2 w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-main file:text-black hover:file:bg-amber-500">
                </div>
                <button type="submit" class="mb-10 rounded-2xl px-24 py-3 text-sm text-black bg-main sm:text-md sm:px-28 md:px-32">Отправить</button>
            </form>
        @endauth

        <div class="col-span-7 mb-12">
            {{ $photos->links('pagination.tailwind') }}
        </div>

        <div id="modal"
             class="fixed top-0 left-0 flex hidden h-screen w-screen items-center justify-center bg-black/70 z-80">


            <a class="fixed top-6 right-8 text-5xl font-bold text-white z-90" href="javascript:void(0)"
               onclick="closeModal()">&times;</a>

            <img id="modal-img" class="object-cover max-h-[600px] sm:max-w-[800px]" />
        </div>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3">

            @foreach($photos as $photo)
                <div>
                    <img class="h-auto max-w-full rounded-lg"src="{{asset('storage/gallery/'.$photo->photo)}}"  alt="{{$photo->photo}}"  onclick="showModal('{{asset('storage/gallery/'.$photo->photo)}}')">
                </div>
            @endforeach

        </div>

    </div>
    <script>
        // Get the modal by id
        var modal = document.getElementById("modal");

        // Get the modal image tag
        var modalImg = document.getElementById("modal-img");

        // this function is called when a small image is clicked
        function showModal(src) {
            modal.classList.remove('hidden');
            modalImg.src = src;
        }

        // this function is called when the close button is clicked
        function closeModal() {
            modal.classList.add('hidden');
        }
    </script>
@endsection
