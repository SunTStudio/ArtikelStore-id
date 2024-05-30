<x-app-layout>
    <section id="ArtikelStore">
        <div class="container " >
            <div class="row justify-content-center">
                <div class="col-8 bg-white m-5 rounded">
                    <p class="fw-bold text-center p-5" id="header-dashboard"><span style="color:#6C757D;">Artikel</span><span style="color:rgb(224, 224, 73);">Store</span><span style="color:#6C757D;" class="span">.ID</span></p>
                    <div class="input-artikel pb-4">
                        <div class="max-w-lg mx-auto">
                            <form class="space-y-6" action="{{ route('artikel.update') }}" method="GET">
                                @csrf
                                @method('GET')
                                <div>
                                    <input type="hidden" name="artikel_id" value="{{ $data->artikel_id }}">
                                    <label for="article-name" class="block text-xl font-bold text-gray-700">Nama Artikel</label>
                                    <input type="text" name="name" id="article-name" value="{{ $data->name }}" autocomplete="off" required
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div>
                                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" aria-label="Default select example" name="tag_id">
                                        <option selected class="font-bold text-gray-700" value="{{ $data->tag->id }}">{{ $data->tag->name_tag}}</option>
                                    @foreach ($kategori as $item )
                                        <option value="{{ $item->id }}">{{ $item->name_tag }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="article-description" class="block text-xl font-bold  text-gray-700">Deskripsi Artikel</label>
                                    <textarea id="article-description" name="deskripsi" rows="3" required
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $data->deskripsi }}</textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-xl font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Simpan Artikel
                                    </button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
