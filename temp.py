def replace(x):
    template = f"""
    <div class="sm:col-span-4">
                  <label for="{x}" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                  <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                      <input type="text" name="{x}" id="{x}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="John Smith">
                    </div>
                  </div>
                </div>
    """
    print(template)

for s in ['jobtitle','bio','email','title','extract']:
    replace(s)
