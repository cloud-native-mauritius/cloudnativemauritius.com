@extends('layouts.main')

@section('content')

    <section class="mt-8 max-w-4xl mx-auto">

        <h2 class="ml-6 text-md text-slate-700 font-bold uppercase">Call For Papers</h2>

        <div class="mt-4 bg-white lg:rounded-md lg:shadow-md p-4 lg:outline">
            <div class="prose max-w-full">
                <form class="ml-6 text-md text-slate-700 font-bold uppercase" method="post" action="/cfp">
                    @csrf
                      <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                          
                          <h2 class="ml-6 text-md text-slate-700 font-bold uppercase">Call For Papers</h2>
                    
                          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                              <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                              <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                  <input type="text" name="name" id="name" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                              </div>
                            </div>
                            
                            <div class="sm:col-span-4">
                              <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company</label>
                              <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                  <input type="text" name="company" id="company" autocomplete="company" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                              </div>
                            </div>
                            
                            <div class="sm:col-span-4">
                              <label for="jobtitle" class="block text-sm font-medium leading-6 text-gray-900">Job Title</label>
                              <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                  <input type="text" name="jobtitle" id="jobtitle" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                              </div>
                            </div>
                
            
                            <div class="sm:col-span-4">
                              <label for="bio" class="block text-sm font-medium leading-6 text-gray-900">Bio</label>
                              <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                  <input type="text" name="bio" id="bio" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                              </div>
                            </div>
                
            
                            <div class="sm:col-span-4">
                              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                              <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                  <input type="text" name="email" id="email" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                              </div>
                            </div>
                
            
                            <div class="sm:col-span-4">
                              <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Presentation Title</label>
                              <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                  <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                              </div>
                            </div>
                    
                            <div class="col-span-full">
                              <label for="extract" class="block text-sm font-medium leading-6 text-gray-900">Presentation Extract</label>
                              <p class="mt-3 text-xs leading-6 text-gray-600">Write a few sentences about your presentation topic.</p>
                              <div class="mt-2">
                                <textarea id="extract" name="extract" rows="3" class="block w-[calc(100%-2rem)] rounded-md border-0 px-3 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                              </div>
                            </div>
                    
                            <div class="col-span-full w-[calc(100%-30rem)]">
                              <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Speaker Photo</label>
                              <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                  <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                  </svg>
                                  <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                      <span>Upload a file</span>
                                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <span class="pl-1">or drag and drop</span>
                                  </div>
                                  <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                      </div>
                    
                      <div class="mt-6 flex items-center justify-end gap-x-6">
                        <!-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> -->
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                      </div>
                    </form>

            </div>
        </div>

    </section>


    <section class="mt-8 max-w-4xl mx-auto">
        

    </section>
@endsection

@section('head')
    <title>Call For Papers</title>
@endsection
