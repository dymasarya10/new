<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mata Pelajaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-justify">
                    {{ __("
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam qui iste odit, corrupti quo suscipit
                    accusantium pariatur vero dolor quisquam, est molestiae sunt tempora maiores explicabo modi, similique
                    numquam possimus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor reiciendis nihil saepe
                    nulla culpa vel praesentium, facere reprehenderit voluptate a fugit. Iste veritatis ab assumenda quasi,
                    architecto qui, sapiente provident consequuntur pariatur iure mollitia inventore voluptatum. Reprehenderit
                    ex similique voluptatum.
                    ") }}
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl px-8 grid grid-cols-4 gap-4 mx-auto">
        @for ($i = 0; $i < 11; $i++)
            <a class="bg-white overflow-hidden shadow-sm sm:rounded-lg" href="">
                <div class="bg-green-600">
                    <div class="text-center text-white p-6 border text-lg font-bold">
                        NAMA MATA PELAJARAN
                    </div>
                </div>
                <div class="p-6 text-gray-900">
                    <table class="border-collapse border border-slate-400 w-full" >
                        <thead>
                          <tr>
                            <th class="border border-slate-300 ...">State</th>
                            <th class="border border-slate-300 ...">City</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                </div>
            </a>
        @endfor
    </div>
</x-app-layout>
