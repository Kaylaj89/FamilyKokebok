<x-app-layout>
  <x-slot name="header">
    <div class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
      {{ __('Recipes') }}
      <x-layout.crud-button href="/recipes/create" color="green">
        Add New Recipe
      </x-layout.crud-button>
    </div>
  </x-slot>

  @if (count($recipes) < 1) <p>no recipes here yet! Why not create one?</p>
    @else

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                  </th>
                  <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Description
                  </th>
                  <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Author
                  </th>
                  <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Likes
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($recipes as $recipe)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <!-- <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                  </div> -->
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          <a href="/recipes/{{$recipe->id}}"
                            class="text-indigo-600 hover:text-indigo-900">{{$recipe->name}}</a>
                        </div>
                        <!-- <div class="text-sm text-gray-500">
                      
                    </div> -->
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$recipe->description}}</div>
                    <!--                 <div class="text-sm text-gray-500">Optimization</div>
 -->
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span
                      class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      author coming soon
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$recipe->likes}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="/recipes/{{$recipe->id}}" class="text-indigo-600 hover:text-indigo-900">View </a>
                    |
                    <a href="/recipes/{{$recipe->id}}/edit" class="text-indigo-600 hover:text-indigo-900">Edit </a>
                  </td>
                </tr>
                @endforeach
                <!-- More items... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    @endif
    </div>
    </div>
    </div>

</x-app-layout>