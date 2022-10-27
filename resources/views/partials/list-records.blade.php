                    {{-- Guide to Check for a table --}}
                    {{-- search for "USERS","MEMBERS" --}}


                    <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    
                    {{-- THIS WORKS FOR ALL TABLES --}}
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            @for ($i = 0; $i < count($headings); $i++)
                                <th scope="col" class="py-3 px-6">
                                    {{$headings[$i]}}
                                </th>                                   
                            @endfor
                        </tr>
                    </thead>

                        {{-- IF USERS --}}
                        @if ($title == 'users')                       
                            <tbody>
                                @foreach ($records as $value)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="py-4 px-6">
                                          {{$value['name']}}
                                        </td>                                 
                                        <td class="py-4 px-6">
                                          {{$value['email']}}
                                        </td>                                 
                                        <td class="py-4 px-6">
                                          {{$value['phone']}}
                                        </td>
                                        <td class="py-4 px-6">
                                          {{$value['date']}}
                                        </td>  
                                        <td class="py-4 px-6"> <button class="bg-green-800 px-2 text-white">View</button></td>                               
                                      

                                    </tr>
                                @endforeach        
                            </tbody>
                        @endif

                        {{-- IF MEMBERS --}}
                        @if ($title == 'members')
                            <tbody>
                                @foreach ($records as $value)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="py-4 px-6">
                                          {{$value['namee']}}
                                        </td>                                 
                                        <td class="py-4 px-6">
                                          {{$value['emaile']}}
                                        </td>                                 
                                          <td class="py-4 px-6">
                                          {{$value['phonee']}}
                                        </td> 
                                        <td class="py-4 px-6">
                                          <button class="bg-red-800 px-2 text-white">View</button>
                                        </td>                               

                                      

                                    </tr>
                                @endforeach        
                            </tbody>
                        @endif
                      
                    </table>
                    </div>
