@extends("admin.adminBase")

@section('content')
<div class="flex">
    @include("admin.side")

    <div class="w-4/5 h-screen">

        <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-3 gap-4 px-5">
                <div class="flex mb-3 flex-col">
                    <label for="">Title</label>
                    <input type="text" name="title" class="border border-gray-400 py-2 px-1 rounded">
                </div>

                <div class="mb-3 flex flex-col">
                    <label for="">Duration</label>
                    <input type="text" name="duration" class="border  border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="">Price</label>
                    <input type="number" name="price" class="border  border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="">Discount_Price</label>
                    <input type="number" name="discount_price" class="border  border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="flex mb-3 flex-col col-span-2">
                    <label for="">Image</label>
                    <input type="file" name="image" class="border  border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="mb-3 flex flex-col col-span-3">
                    <label for="">Description</label>
                    <textarea name="description" class="border  border-gray-400 py-2 px-1 rounded " rows="10"></textarea>
                </div>
                <div class="flex">
                    <input type="submit" class="bg-green-800 hover:bg-green-900 text-white px-3 py-2 text-2xl rounded">
                </div>
            </div>
        </form>

    </div>
</div>
</div>
@endsection