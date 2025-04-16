<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Trust
        </h2>
    </x-slot>

    <div class="flex items-center justify-center" id="responsiveForm">
        <div class="space-y-10 divide-y divide-gray-900/10 p-5 m-50 card">
            <div class="bg-white rounded-md shadow-md p-6 lg:w-full lg:p-8">
                <form method='POST' action='/addtrust'>
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-5">
                        <div class="">
                            <label for="site_id" class="block text-sm font-medium text-gray-600">Site ID <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="site_id" name="site_id"
                                class="col-span-4 w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="trust_name" placeholder="Enter site Id">
                        </div>

                        <div class="relative col-span-2">
                            <label for="trust_name" class="block text-sm font-medium text-gray-600">Trust Name <span
                                    class="text-red-500">*</span></label>
                            <div class="flex">
                                <select name="trust_name" id="select_trust_name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    style="width: 100%" data-placeholder="Select a trust..." data-allow-clear="false"
                                    title="Select trust...">
                                    <option value="">Select trust</option>
                                    <option value="AP Green 9-9-20">AP Green 9-9-20</option>
                                    <option value="AWI_4-5-22">AWI_4-5-22</option>
                                    <option value="CE Product Site List">CE Product Site List</option>
                                </select>

                                <input type="text" id="input_trust_name"
                                    class="hidden block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    autocomplete="trust_name" placeholder="Enter Trust Name">

                                <span onclick="toggleSelectInput('input_trust_name','select_trust_name','trust_name')"
                                    class="px-1 cursor-pointer mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 py-5">
                        <div class="col-span-2">
                            <label for="site_name" class="block text-sm font-medium text-gray-600">Site Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="site_name" name="site_name"
                                class="w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="site_name" placeholder="Enter site Name">
                        </div>
                    </div>




                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-5">
                        <div class="relative">
                            <label for="country" class="block text-sm font-medium text-gray-600">Country <span
                                    class="text-red-500">*</span></label>
                            <div class="flex">
                                <select name="country" id="select_country"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    style="width: 100%" data-placeholder="Select a country..." data-allow-clear="false"
                                    title="Select country...">
                                    <option value="">Select Country</option>
                                    <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                                <input type="text" id="input_coutry_name"
                                    class="hidden block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    autocomplete="country" placeholder="Enter Country Code or Name">
                                <span onclick="toggleSelectInput('input_coutry_name','select_country','country')"
                                    class="px-1 cursor-pointer mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="relative">
                            <label for="state" class="block text-sm font-medium text-gray-600">State <span
                                    class="text-red-500">*</span></label>
                            <div class="flex">
                                <select name="state" id="select_state"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    style="width: 100%" data-placeholder="Select a state..." data-allow-clear="false"
                                    title="Select state...">
                                    <option value="">Select State</option>
                                    <option value="Na">NA</option>
                                    <option value="La">LA</option>
                                    <option value="DS">DS</option>
                                    <option value="BA">BA</option>
                                </select>
                                <input type="text" id="input_state_name" 
                                    class="hidden block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    autocomplete="state" placeholder="Enter State Code or Name">
                                <span onclick="toggleSelectInput('input_state_name','select_state','state')"
                                    class="px-1 cursor-pointer mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="relative">
                            <label for="city" class="block text-sm font-medium text-gray-600">City <span
                                    class="text-red-500">*</span></label>
                            <div class="flex">
                                <select name="city" id="select_city"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    style="width: 100%" data-placeholder="Select a city..." data-allow-clear="false"
                                    title="Select a city...">
                                    <option value="">Select city</option>
                                    <option value="EDMONTON">EDMONTON</option>
                                    <option value="MENTOR">MENTOR</option>
                                    <option value="CALGARY">CALGARY</option>
                                </select>
                                <input type="text" id="input_city_name" 
                                    class="hidden block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    autocomplete="city" placeholder="Enter city Code or Name">
                                <span onclick="toggleSelectInput('input_city_name','select_city','city')"
                                    class="px-1 cursor-pointer mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-5">
                        <div class="">
                            <label for="start_date" class="block text-sm font-medium text-gray-600">Start Date <span
                                    class="text-grey-200">(optional)</span></label>
                            <input type="date" id="start_date" name="start_date"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="start_date">
                        </div>
                        <div class="">
                            <label for="end_date" class="block text-sm font-medium text-gray-600">End Date <span
                                    class="text-grey-200">(optional)</span></label>
                            <input type="date" id="end_date" name="end_date"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="end_date">
                        </div>
                        <div class="">
                            <label for="added_date" class="block text-sm font-medium text-gray-600">Added Date <span
                                    class="text-grey-200">(optional)</span></label>
                            <input type="date" id="added_date" name="added_date"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="added_date">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-5">
                        <div class="">
                            <label for="entity" class="block text-sm font-medium text-gray-600">Entity <span
                                    class="text-grey-200">(optional)</span></label>
                            <input type="text" id="entity" name="entity"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="entity" placeholder="Enter Entity Name">
                        </div>
                        <div class="col-span-2">
                            <label for="location_info" class="block text-sm font-medium text-gray-600">Location Info
                                <span class="text-grey-200">(optional)</span></label>
                            <input type="text" id="location_info" name="location_info"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="location_info" placeholder="Enter location info">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-5">
                        <div class="">
                            <label for="address" class="block text-sm font-medium text-gray-600">Address <span
                                    class="text-grey-200">(optional)</span></label>
                            <input type="text" id="address" name="address"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="address" placeholder="Enter address">
                        </div>
                        <div class="">
                            <label for="occupation" class="block text-sm font-medium text-gray-600">Occupation <span
                                    class="text-grey-200">(optional)</span></label>
                            <input type="text" id="occupation" name="occupation"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="occupation" placeholder="Enter Occupation">
                        </div>

                        <div class=" ">
                            <label for="doc_req" class="block text-sm font-medium leading-6 text-gray-600">Document
                                requirement <span class="text-grey-200">(optional)</span></label>
                            <select id="doc_req" name="doc_req" autocomplete="doc_req"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option>Select One</option>
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-5">

                        <div class=" ">
                            <label for="change_since_last_month"
                                class="block text-sm font-medium leading-6 text-gray-600">Changed Since
                                Last
                                Month?<span class="text-grey-200">(optional)</span></label>
                            <select id="change_since_last_month" name="change_since_last_month"
                                autocomplete="change_since_last_month"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option>Select One</option>
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>

                        <div class="">
                            <label for="employer" class="block text-sm font-medium text-gray-600">Employer <span
                                    class="text-grey-200">(optional)</span></label>
                            <input type="text" id="employer" name="employer"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="employer" placeholder="Enter Employer">
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-5">

                        <div class="col-span-2">
                            <label for="remark" class="block text-sm font-medium text-gray-600">Remarks <span
                                    class="text-grey-200">(optional)</span></label>
                            <textarea type="text" id="remark" name="remark"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                autocomplete="remark" placeholder="Enter remark"></textarea>
                        </div>

                    </div>
                    
                    <button class="mt-4 bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>

<script>
    $(document).ready(function () {
        $('#select_trust_name').select2();
        $('#select_city').select2();
        $('#select_country').select2();
        $('#select_state').select2();
    });


    function toggleSelectInput(inputId, selectId, name) {
        var inputElement = document.getElementById(inputId);
        var selectElement = document.getElementById(selectId);

        if (inputElement.classList.contains("hidden")) {

            inputElement.classList.remove("hidden");
            inputElement.setAttribute("name", name);
            selectElement.removeAttribute("name");
            $('#' + selectId).select2('destroy');
            $('#' + selectId).hide();

        } else {
            inputElement.classList.add("hidden");
            inputElement.removeAttribute("name");
            $('#' + selectId).select2('');
            selectElement.setAttribute("name", name);
        }
    }




    // function getState(params) {
    //     var stateSelect = document.getElementById("select_state");
    //     var selectedCountry = params;

    //     var stateOptions = {
    //         "USA": ["New York", "California", "Texas"],
    //         "Canada": ["Ontario", "Quebec", "British Columbia"]
    //     };
    //     stateSelect.innerHTML = '<option>Select State</option>';

    //     if (stateOptions[selectedCountry]) {
    //         stateOptions[selectedCountry].forEach(function (state) {
    //             var option = document.createElement("option");
    //             option.value = state;
    //             option.text = state;
    //             stateSelect.appendChild(option);
    //         });
    //     }
    // }

    document.addEventListener('DOMContentLoaded', function () {
        var responsiveForm = document.getElementById('responsiveForm');
        window.addEventListener('resize', function () {

            if (window.innerWidth < 600) {
                responsiveForm.classList.remove('flex', 'items-center', 'justify-center');
            } else {
                responsiveForm.classList.add('flex', 'items-center', 'justify-center');
            }
        });
        if (window.innerWidth < 600) {
            responsiveForm.classList.remove('flex', 'items-center', 'justify-center');
        }
    });



</script>