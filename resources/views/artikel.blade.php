<x-app-layout>
    <section id="ArtikelStore">
        <div class="container " >
            <div class="row justify-content-center">
                <div class="col-8 bg-white m-5 rounded">
                    <p class="fw-bold text-center p-5" id="header-dashboard"><span style="color:#6C757D;">Artikel</span><span style="color:rgb(224, 224, 73);">Store</span><span style="color:#6C757D;" class="span">.ID</span></p>
                    <div class="show-artikel pb-4">
                        <div class="flex justify-center items-center ">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-green-800 border border-green-800">
                                <thead>
                                    <tr class="bg-green-500">
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider border-b border-green-600">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider border-b border-green-600">
                                            Nama Artikel
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider border-b border-green-600">
                                            Deskripsi Artikel
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider border-b border-green-600">
                                            Kategori
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider border-b border-green-600">
                                            Option
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-green-800">
                                    @foreach ($data as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-green-600">
                                            <div class="text-sm text-gray-900">{{ $loop->iteration }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-green-600">
                                            <div class="text-sm text-gray-900">{{ $item->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-green-600">
                                            <div class="text-sm text-gray-900">{{ $item->deskripsi }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-green-600">
                                            <div class="text-sm text-gray-900">{{ $item->tag->name_tag }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-green-600">
                                            <div class="text-sm text-gray-900"><a href="{{ route('artikel.edit',$item->artikel_id) }}">Edit</a> | <form action="{{ route('artikel.destroy', $item->artikel_id) }}" method="POST" style="display: inline;">  @csrf    @method('DELETE') <button type="submit">Hapus</button> </form></div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="flex justify-center items-center  p-4">
                        <a href="{{ route('dashboard') }}" class="inline-block bg-gray-400 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded">
                            Isikan Data Artikel Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
