<template>
    <AppLayout>
            <!-- Header Section -->
            <div class="p-6 bg-white border-b border-yellow-200">
                <h1 class="text-3xl font-bold text-blue-900">BACKGROUND</h1>
                <p class="text-gray-600">Fill and check the necessary information below.</p>
            </div>
        <div class="flex flex-col lg:flex-row">
            <!-- Sidebar -->
            <div>
                <Sidebar />
            </div>

            <!-- Main Content -->
            <div class="relative w-full p-6">

                <!-- Custom Tabs -->
                <div class="flex justify-end -mb-px">
                    <button @click="activeTab = 0" :class="tabButtonClass(0)">FAMILY</button>
                    <button @click="activeTab = 1" :class="tabButtonClass(1)">EDUCATION</button>
                    <button @click="activeTab = 2" :class="tabButtonClass(2)">ORGANIZATION</button>
                    <button @click="activeTab = 3" :class="tabButtonClass(3)">WORK EXPERIENCE</button>
                    <button @click="activeTab = 4" :class="tabButtonClass(4)">SKILLS</button>
                    <button @click="activeTab = 5" :class="tabButtonClass(5)">REFERENCES</button>
                </div>

                <!-- Family Tab -->
                <div v-if="activeTab === 0" class="p-6 bg-white border-2 border-blue-800 rounded-lg">
                    <!-- Spouse Information -->
                    <div class="grid grid-cols-5 gap-4">
                        <div class="col-span-5 pb-2 mb-1 text-blue-800 border-b border-yellow-200">
                            <h1 style="font-size: 20px; font-weight: bold;">SPOUSE</h1>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">SURNAME</label>
                            <input class="input-field" type="text" v-model="fields.spouseSurname" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('spouseSurname', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">FIRST NAME</label>
                            <input class="input-field" type="text" v-model="fields.spouseFirstName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('spouseFirstName', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">MIDDLE NAME</label>
                            <input class="input-field" type="text" v-model="fields.spouseMiddleName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('spouseMiddleName', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">SUFFIX</label>
                            <select class="input-field" v-model="fields.spouseExtName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }">
                                <option v-for="suffix in suffixes" :key="suffix.value" :value="suffix.value">
                                    {{ suffix.label }}
                                </option>
                            </select>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">OCCUPATION</label>
                            <input class="input-field" type="text" v-model="fields.spouseOccupation" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('spouseOccupation', 'fields')"/>
                        </div>
                        <!-- Employer/Business Information -->
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700">EMPLOYER'S/BUSINESS NAME</label>
                            <input class="input-field" type="text" v-model="fields.spouseBusinessName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }"/>
                        </div>
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700">BUSINESS ADDRESS</label>
                            <input class="input-field" type="text" v-model="fields.spouseBusinessAddress" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">TEL. NO.</label>
                            <input class="input-field" type="text" v-model="fields.spouseTelNo" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateTelephoneNumber('spouseTelNo', 'fields')"/>
                        </div>
                        <!-- Separator for Father's Information -->
                        <div class="col-span-5 pb-2 mt-2 mb-1 text-blue-800 border-b border-yellow-200">
                            <h1 style="font-size: 20px; font-weight: bold;">FATHER</h1>
                        </div>
                        <!-- Father's Information -->
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">SURNAME</label>
                            <input class="input-field" type="text" v-model="fields.fatherSurname" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('fatherSurname', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">FIRST NAME</label>
                            <input class="input-field" type="text" v-model="fields.fatherFirstName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('fatherFirstName', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">MIDDLE NAME</label>
                            <input class="input-field" type="text" v-model="fields.fatherMiddleName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('fatherMiddleName', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">SUFFIX</label>
                            <select class="input-field" v-model="fields.fatherExtName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }">
                                <option v-for="suffix in suffixes" :key="suffix.value" :value="suffix.value">
                                    {{ suffix.label }}
                                </option>
                            </select>
                        </div>
                        <div class="col-span-1"></div> <!-- Empty space for alignment -->
                        <!-- Separator for Mother's Information -->
                        <div class="col-span-5 pb-2 mt-2 mb-1 text-blue-800 border-b border-yellow-200">
                            <h1 style="font-size: 20px; font-weight: bold;">MOTHER</h1>
                        </div>
                        <!-- Mother's Information -->
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">SURNAME</label>
                            <input class="input-field" type="text" v-model="fields.motherSurname" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('motherSurname', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">FIRST NAME</label>
                            <input class="input-field" type="text" v-model="fields.motherFirstName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('motherFirstName', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">MIDDLE NAME</label>
                            <input class="input-field" type="text" v-model="fields.motherMiddleName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('motherMiddleName', 'fields')"/>
                        </div>
                        <div class="col-span-1">
                            <label class="block mb-2 text-sm font-bold text-gray-700">MAIDEN NAME</label>
                            <input class="input-field" type="text" v-model="fields.motherMaidenName" :disabled="!isEditingFamily" :class="{ 'disabled-input': !isEditingFamily }" @input="validateName('motherMaidenName', 'fields')"/>
                        </div>
                    </div>
                    <div class="mt-6 text-right">
                        <button v-if="!isEditingFamily" @click="toggleFamilyEditing" class="px-8 py-2 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        <div v-if="isEditingFamily" class="inline-flex space-x-4">
                            <button @click="cancelFamilyEditing" class="px-8 py-2 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">CANCEL</button>
                            <button @click="updateFamilyData" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">SAVE</button>
                        </div>
                    </div>

                    <div class="col-span-5 pb-2 mb-1 text-blue-800 border-b border-yellow-200">
                            <h1 style="font-size: 20px; font-weight: bold;">CHILD</h1>
                        </div>
                    <DataTable v-model:selection="selectedRow" :value="childData" class="mt-8" :paginator="true" :rows="5" @selection-change="onRowSelect">
                        <Column v-if="isEditingProfile" selectionMode="single" headerStyle="width: 3em"></Column>
                        <Column field="full_name" header="FULL NAME"></Column>
                        <Column field="child_dob" header="DATE OF BIRTH"></Column>
                    </DataTable>
                    <div class="mt-6 text-right">
                        <button v-if="!isEditingProfile" @click="openAddDialog" class="px-8 py-2 mr-4 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">ADD</button>
                        <button v-if="!isEditingProfile" @click="toggleProfileEditing" class="px-8 py-2 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        <div v-if="isEditingProfile" class="inline-flex space-x-4">
                            <button @click="cancelProfileEditing" class="px-8 py-2 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">CANCEL</button>
                            <button v-if="selectedRow" @click="openEditDialog(selectedRow)" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        </div>
                    </div>
                </div>

                <!-- Education Tab -->
                <div v-if="activeTab === 1" class="p-6 bg-white border-2 border-blue-800 rounded-lg">
                    <h2 class="pb-2 mb-4 text-lg font-semibold text-blue-800 border-b border-yellow-200">EDUCATION</h2>
                    <DataTable v-model:selection="selectedRow" :value="educationData" class="mt-8" :paginator="true" :rows="5">
                        <Column v-if="isEditingProfile" selectionMode="single" headerStyle="width: 3em"></Column>
                        <Column field="educ_level" header="LEVEL OF EDUCATION"></Column>
                        <Column field="educ_school" header="NAME OF SCHOOL"></Column>
                        <Column field="educ_degree" header="BASIC EDUCATION|DEGREE|COURSE"></Column>
                        <Column field="educ_from" header="DATE ENROLLED"></Column>
                        <Column field="educ_hl_earned" header="HIGHEST LEVEL EARNED"></Column>
                        <Column field="educ_year_grad" header="YEAR GRADUATED"></Column>
                        <Column field="educ_academic_honor" header="SCHOLARSHIPS & ACADEMIC EXCELLENCE"></Column>
                    </DataTable>
                    <div class="mt-6 text-right">
                        <button v-if="!isEditingProfile" @click="openAddDialog" class="px-8 py-2 mr-4 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">ADD</button>
                        <button v-if="!isEditingProfile" @click="toggleProfileEditing" class="px-8 py-2 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        <div v-if="isEditingProfile" class="inline-flex space-x-4">
                            <button @click="cancelProfileEditing" class="px-8 py-2 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">CANCEL</button>
                            <button v-if="selectedRow" @click="openEditDialog(selectedRow)" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        </div>
                    </div>
                </div>

                <!-- Organization Tab -->
                <div v-if="activeTab === 2" class="p-6 bg-white border-2 border-blue-800 rounded-lg">
                    <h2 class="pb-2 mb-4 text-lg font-semibold text-blue-800 border-b border-yellow-200">ORGANIZATIONS</h2>
                    <DataTable v-model:selection="selectedRow" :value="organizationData" class="mt-8" :paginator="true" :rows="5" @selection-change="onRowSelect">
                        <Column v-if="isEditingProfile" selectionMode="single" headerStyle="width: 3em"></Column>
                        <Column field="org_name" header=""></Column>
                    </DataTable>
                    <div class="mt-6 text-right">
                        <button v-if="!isEditingProfile" @click="openAddDialog" class="px-8 py-2 mr-4 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">ADD</button>
                        <button v-if="!isEditingProfile" @click="toggleProfileEditing" class="px-8 py-2 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        <div v-if="isEditingProfile" class="inline-flex space-x-4">
                            <button @click="cancelProfileEditing" class="px-8 py-2 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">CANCEL</button>
                            <button v-if="selectedRow" @click="openEditDialog(selectedRow)" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        </div>
                    </div>
                </div>

                <!-- Work Experience Tab -->
                <div v-if="activeTab === 3" class="p-6 bg-white border-2 border-blue-800 rounded-lg">
                    <h2 class="pb-2 mb-4 text-lg font-semibold text-blue-800 border-b border-yellow-200">WORK EXPERIENCE</h2>
                    <DataTable v-model:selection="selectedRow" :value="workExperienceData" class="mt-8" :paginator="true" :rows="5">
                        <Column v-if="isEditingProfile" selectionMode="single" headerStyle="width: 3em"></Column>
                        <Column field="workfr" header="WORK FROM"></Column>
                        <Column field="workto" header="WORK TO"></Column>
                        <Column field="work_pos" header="POSITION"></Column>
                        <Column field="work_dept" header="DEPARTMENT|AGENCY|OFFICE|COMPANY"></Column>
                        <Column field="work_salary" header="MONTHLY SALARY"></Column>
                        <Column field="work_salarygrade" header="SALARY GRADE"></Column>
                        <Column field="work_stat" header="STATUS OF APPOINTMENT"></Column>
                        <Column field="work_gov" header="GOV'T SERVICE"></Column>
                    </DataTable>
                    <div class="mt-6 text-right">
                        <button v-if="!isEditingProfile" @click="openAddDialog" class="px-8 py-2 mr-4 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">ADD</button>
                        <button v-if="!isEditingProfile" @click="toggleProfileEditing" class="px-8 py-2 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        <div v-if="isEditingProfile" class="inline-flex space-x-4">
                            <button @click="cancelProfileEditing" class="px-8 py-2 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">CANCEL</button>
                            <button v-if="selectedRow" @click="openEditDialog(selectedRow)" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        </div>
                    </div>
                </div>

                <!-- Skills Tab -->
                <div v-if="activeTab === 4" class="p-6 bg-white border-2 border-blue-800 rounded-lg">
                    <h2 class="pb-2 mb-4 text-lg font-semibold text-blue-800 border-b border-yellow-200">SKILLS</h2>
                    <DataTable v-model:selection="selectedRow" :value="skillsData" class="mt-8" :paginator="true" :rows="5">
                        <Column v-if="isEditingProfile" selectionMode="single" headerStyle="width: 3em"></Column>
                        <Column field="skill" header=""></Column>
                    </DataTable>
                    <div class="mt-6 text-right">
                        <button v-if="!isEditingProfile" @click="openAddDialog" class="px-8 py-2 mr-4 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">ADD</button>
                        <button v-if="!isEditingProfile" @click="toggleProfileEditing" class="px-8 py-2 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        <div v-if="isEditingProfile" class="inline-flex space-x-4">
                            <button @click="cancelProfileEditing" class="px-8 py-2 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">CANCEL</button>
                            <button v-if="selectedRow" @click="openEditDialog(selectedRow)" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                        </div>
                    </div>
                </div>

                <!-- References Tab -->
                <div v-if="activeTab === 5" class="p-6 bg-white border-2 border-blue-800 rounded-lg">
                    <h2 class="pb-2 mb-4 text-lg font-semibold text-blue-800 border-b border-yellow-200">REFERENCES</h2>
                <DataTable v-model:selection="selectedRow" :value="referencesData" class="mt-8" :paginator="true" :rows="5">
                    <Column v-if="isEditingProfile" selectionMode="single" headerStyle="width: 3em"></Column>
                    <Column field="full_name" header="FULL NAME"></Column>
                    <Column field="ref_add" header="BLOCK/STREET/PUROK"></Column>
                    <Column field="ref_cnum" header="TELEPHONE NUMBER"></Column>
                </DataTable>
                <div class="mt-6 text-right">
                    <button v-if="!isEditingProfile" @click="openAddDialog" class="px-8 py-2 mr-4 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">ADD</button>
                    <button v-if="!isEditingProfile" @click="toggleProfileEditing" class="px-8 py-2 font-semibold text-white transition duration-300 bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                    <div v-if="isEditingProfile" class="inline-flex space-x-4">
                        <button @click="cancelProfileEditing" class="px-8 py-2 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">CANCEL</button>
                        <button v-if="selectedRow" @click="openEditDialog(selectedRow)" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">EDIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Edit Modal -->
        <div v-if="showEditDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <h2 class="mb-4 text-xl font-semibold">Edit {{ currentTabLabel }}</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <!-- Render fields -->
                        <div v-for="(value, key) in filteredEditFields" :key="key">
                            <label class="block mb-2 text-sm font-bold text-gray-700">{{ formatFieldLabel[key] }}</label>

                            <template v-if="key === 'child_xname'">
                                <select
                                    class="input-field"
                                    v-model="editFields[key]"
                                >
                                    <option v-for="suffix in suffixes" :key="suffix.value" :value="suffix.value">
                                        {{ suffix.label }}
                                    </option>
                                </select>
                            </template>

                            <template v-else-if="key === 'child_fname' || key === 'child_mname' || key === 'child_lname' || key === 'educ_school' || key === 'educ_degree'
                            || key === 'educ_hl_earned' || key === 'educ_academic_honor' || key === 'org_name' || key === 'work_dept' || key === 'work_pos' || key === 'work_stat'
                            || key === 'skill' || key === 'ref_fname' || key === 'ref_mname' || key === 'ref_lname'">
                                <input
                                    class="input-field"
                                    :type="getInputType(key, value)"
                                    v-model="editFields[key]"
                                    @input="validateAlphabetOnly(key, 'editFields')"
                                />
                            </template>

                            <template v-else-if="key === 'ref_xname'">
                                <select
                                    class="input-field"
                                    v-model="editFields[key]"
                                >
                                    <option v-for="suffix in suffixes" :key="suffix.value" :value="suffix.value">
                                        {{ suffix.label }}
                                    </option>
                                </select>
                            </template>

                            <template v-else-if="key === 'work_gov'">
                                <select
                                    class="input-field"
                                    v-model="editFields[key]"
                                >
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </template>

                            <!-- Work Experience Date Fields (with validation) -->
                            <template v-else-if="key === 'workfr' || key === 'child_dob'">
                                <input
                                    class="input-field"
                                    type="date"
                                    v-model="editFields[key]"
                                    :max="maxDate"
                                />
                            </template>

                            <template v-else-if="key === 'workto'">
                                <input
                                    class="input-field"
                                    type="date"
                                    v-model="editFields[key]"
                                />
                                <span v-if="dateError" class="error-message">"Worked To" date cannot be before "Worked From" date.</span>
                            </template>

                            <template v-else-if="key === 'educ_year_grad'">
                                <input
                                    class="input-field"
                                    v-model="editFields[key]"
                                    @input="validateNumber(key, 'editFields')"
                                />
                            </template>

                            <!-- Number validation  -->
                            <template v-else-if=" key === 'work_salary' || key === 'work_salarygrade' ">
                                <input
                                    class="input-field"
                                    :type="getInputType(key, value)"
                                    v-model="editFields[key]"
                                    @input="validateDecimal(key, 'editFields')"
                                />
                            </template>

                            <!-- Other input fields -->
                            <input
                                v-else
                                class="input-field"
                                :type="getInputType(key, value)"
                                v-model="editFields[key]"
                            />
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideEditDialog" class="px-4 py-2 mr-4 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">
                            Cancel
                        </button>
                        <button @click="saveEdit" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Modal -->
        <div v-if="showSuccessDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <i class="mb-4 text-4xl fas fa-check-circle" style="color: green;"></i>
                        <h2 class="mb-4 text-xl font-semibold">Updated Successfully!</h2>
                        <p class="mb-4">Details have been successfully updated. Press 'Back' to continue.</p>
                    </div>
                    <div class="text-center">
                        <button @click="hideSuccessDialog" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Confirmation Modal -->
        <div v-if="showUpdateDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <i class="mt-4 mb-4 text-4xl fas fa-circle-question" style="color: red;"></i>
                        <h2 class="mb-4 text-xl font-semibold">Are you sure you want to update?</h2>
                        <p class="mb-4">If you are certain, click 'Confirm' to proceed. Otherwise, click 'Cancel' to go back and review the information.</p>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideUpdateDialog" class="px-6 py-2 mr-4 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">
                            Cancel
                        </button>
                        <button @click="saveUpdate" class="px-6 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Child Modal -->
        <div v-if="showAddChildDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <h2 class="mb-4 text-xl font-semibold">Add Child</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">CHILD FIRST NAME</label>
                            <input class="input-field" type="text" v-model="newChild.child_fname" @input="validateName('child_fname', 'newChild')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">CHILD MIDDLE NAME</label>
                            <input class="input-field" type="text" v-model="newChild.child_mname" @input="validateName('child_mname', 'newChild')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">CHILD LAST NAME</label>
                            <input class="input-field" type="text" v-model="newChild.child_lname"  @input="validateName('child_lname', 'newChild')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">CHILD SUFFIX</label>
                            <select class="input-field" v-model="newChild.child_xname">
                                <option v-for="suffix in suffixes" :key="suffix.value" :value="suffix.value">
                                    {{ suffix.label }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">CHILD BIRTH DATE</label>
                            <input
                                class="input-field"
                                type="date"
                                v-model="newChild.child_dob"
                                :max="maxDate"
                            />
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideAddChildDialog" class="px-4 py-2 mr-4 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">
                            Cancel
                        </button>
                        <button @click="addChild" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Education Modal -->
        <div v-if="showAddEducationDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <h2 class="mb-4 text-xl font-semibold">Add Education</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">LEVEL OF EDUCATION</label>
                            <input class="input-field" type="text" v-model="newEducation.educ_level" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">NAME OF SCHOOL</label>
                            <input class="input-field" type="text" v-model="newEducation.educ_school"  @input="validateName('educ_school', 'newEducation')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">BASIC EDUCATION|DEGREE|COURSE</label>
                            <input class="input-field" type="text" v-model="newEducation.educ_degree" @input="validateName('educ_degree', 'newEducation')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">DATE ENROLLED</label>
                            <input class="input-field" type="date" v-model="newEducation.educ_from"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">HIGHEST LEVEL EARNED</label>
                            <input class="input-field" type="text" v-model="newEducation.educ_hl_earned" @input="validateName('educ_hl_earned', 'newEducation')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">YEAR GRADUATED</label>
                            <input class="input-field" type="text" v-model="newEducation.educ_year_grad" @input="validateNumber('educ_year_grad', 'newEducation')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">SCHOLARSHIPS & ACADEMIC EXCELLENCE</label>
                            <input class="input-field" type="text" v-model="newEducation.educ_academic_honor" @input="validateName('educ_academic_honor', 'newEducation')"/>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideAddEducationDialog" class="px-8 py-2 mr-4 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">
                            Cancel
                        </button>
                        <button @click="addEducation" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Organization Modal -->
        <div v-if="showAddOrganizationDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <h2 class="mb-4 text-xl font-semibold">Add Organization</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">ORGANIZATION NAME</label>
                            <input class="input-field" type="text" v-model="newOrganization.org_name" />
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideAddOrganizationDialog" class="px-8 py-2 mr-4 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">
                            Cancel
                        </button>
                        <button @click="addOrganization" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Work Experience Modal -->
        <div v-if="showAddWorkExperienceDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <h2 class="mb-4 text-xl font-semibold">Add Work Experience</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">WORK FROM</label>
                            <input class="input-field" type="date" v-model="newWorkExperience.workfr" :max="maxDate" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">WORK TO</label>
                            <input class="input-field" type="date" v-model="newWorkExperience.workto"/>
                            <span v-if="dateError" class="error-message">"Worked To" date cannot be before "Worked From" date.</span>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">POSITION</label>
                            <input class="input-field" type="text" v-model="newWorkExperience.work_pos" @input="validateName('work_pos', 'newWorkExperience')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">DEPARTMENT|AGENCY|OFFICE|COMPANY</label>
                            <input class="input-field" type="text" v-model="newWorkExperience.work_dept" @input="validateName('work_dept', 'newWorkExperience')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">MONTHLY SALARY</label>
                            <input class="input-field" type="text" v-model="newWorkExperience.work_salary" @input="validateNumber('work_salary', 'newWorkExperience')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">SALARY GRADE</label>
                            <input class="input-field" type="text" v-model="newWorkExperience.work_salarygrade" @input="validateNumber('work_salarygrade', 'newWorkExperience')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">STATUS OF APPOINTMENT</label>
                            <input class="input-field" type="text" v-model="newWorkExperience.work_stat" @input="validateName('work_stat', 'newWorkExperience')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">GOV'T SERVICE</label>
                            <select class="input-field" v-model="newWorkExperience.work_gov">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideAddWorkExperienceDialog" class="px-8 py-2 mr-4 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">
                            Cancel
                        </button>
                        <button @click="addWorkExperience" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Skills Modal -->
        <div v-if="showAddSkillsDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <h2 class="mb-4 text-xl font-semibold">Add Skills</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">SKILLS</label>
                            <input class="input-field" type="text" v-model="newSkill.skill" @input="validateName('skill', 'newSkill')" required />
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideAddSkillsDialog" class="px-8 py-2 mr-4 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">
                            Cancel
                        </button>
                        <button @click="addSkill" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add References Modal -->
        <div v-if="showAddReferencesDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <h2 class="mb-4 text-xl font-semibold">Add Reference</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">FIRST NAME</label>
                            <input class="input-field" type="text" v-model="newReference.ref_fname" @input="validateName('ref_fname', 'newReference')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">MIDDLE NAME</label>
                            <input class="input-field" type="text" v-model="newReference.ref_mname" @input="validateName('ref_mname', 'newReference')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">LAST NAME</label>
                            <input class="input-field" type="text" v-model="newReference.ref_lname" @input="validateName('ref_lname', 'newReference')"/>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">SUFFIX</label>
                            <select class="input-field" v-model="newChild.child_xname">
                                <option v-for="suffix in suffixes" :key="suffix.value" :value="suffix.value">
                                    {{ suffix.label }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">BLOCK/STREET/PUROK</label>
                            <input class="input-field" type="text" v-model="newReference.ref_add" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-bold text-gray-700">TELEPHONE NUMBER</label>
                            <input class="input-field" type="text" v-model="newReference.ref_cnum" @input="validateTelephoneNumber('ref_cnum', 'newReference')"/>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideAddReferencesDialog" class="px-8 py-2 mr-4 font-semibold text-white bg-red-700 rounded-md hover:bg-red-800">
                            Cancel
                        </button>
                        <button @click="addReference" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Modal -->
        <div v-if="showSuccessDialog" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
            <div class="w-full max-w-lg overflow-hidden transition-all transform bg-white rounded-lg">
                <div class="p-4">
                    <div class="text-center">
                        <i class="mb-4 text-4xl fas fa-check-circle" style="color: green;"></i>
                        <h2 class="mb-4 text-xl font-semibold">Updated Successfully!</h2>
                        <p class="mb-4">Details have been successfully updated. Press 'Back' to continue.</p>
                    </div>
                    <div class="mt-6 text-center">
                        <button @click="hideSuccessDialog" class="px-8 py-2 font-semibold text-white bg-blue-900 rounded-md hover:bg-blue-800">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import axios from 'axios';
import { ref, onMounted, h } from 'vue';
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Button from 'primevue/button';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';

export default {
    components: {
        AppLayout, Button, DataTable, Column
    },

    data() {
        return {
            formatFieldLabel: {
                child_fname: 'FIRST NAME',
                child_mname: 'MIDDLE NAME',
                child_lname: 'LAST NAME',
                child_xname: 'SUFFIX',
                child_dob: 'BIRTH DATE',
                educ_level: 'LEVEL OF EDUCATION',
                educ_school: 'NAME OF SCHOOL',
                educ_degree: 'BASIC EDUCATION|DEGREE|COURSE',
                educ_from: 'DATE ENROLLED',
                educ_hl_earned: 'HIGHEST LEVEL EARNED',
                educ_year_grad: 'YEAR GRADUATED',
                educ_academic_honor: 'SCHOLARSHIPS & ACADEMIC EXCELLENCE',
                org_name: 'ORGANIZATION NAME',
                workfr: 'WORK FROM',
                workto: 'WORK TO',
                work_pos: 'WORK POSITION',
                work_dept: 'WORK DEPARTMENT',
                work_salary: 'WORK SALARY',
                work_salarygrade: 'WORK SALARY GRADE',
                work_stat: 'WORK STATUS',
                work_gov: 'GOVERNMENT WORK',
                skill: 'SKILL',
                ref_fname: 'FIRST NAME',
                ref_mname: 'MIDDLE NAME',
                ref_lname: 'LAST NAME',
                ref_xname: 'SUFFIX',
                ref_add: 'BLOCK/STREET/PUROK',
                ref_cnum: 'CONTACT NUMBER',
            },
            fullName: '',
            empPosition: '',
            profilePictureUrl: '',
            fields: {
            spouseSurname: '',
            spouseFirstName: '',
            spouseMiddleName: '',
            spouseExtName: '',
            spouseOccupation: '',
            spouseBusinessName: '',
            spouseBusinessAddress: '',
            spouseTelNo: '',
            fatherSurname: '',
            fatherFirstName: '',
            fatherMiddleName: '',
            fatherExtName: '',
            motherMaidenName: '',
            motherSurname: '',
            motherFirstName: '',
            motherMiddleName: ''
        },
        currentPage: 1,
        totalPages: 5,
        activeTab: 0,
        isEditingFamily: false,
        originalFamilyFields: {},
        isEditingProfile: false,
        originalProfileFields: {},
        childData: [],
        suffixes:[],
        newChild: {
            child_fname: '',
            child_mname: '',
            child_lname: '',
            child_xname: '',
            child_dob: ''
        },
        educationData: [],
        organizationData: [],
        workExperienceData: [],
        skillsData: [],
        referencesData: [],
        newEducation: {
            educ_level: '',
            educ_school: '',
            educ_degree: '',
            educ_from: '',
            educ_hl_earned: '',
            educ_year_grad: '',
            educ_academic_honor: ''
        },
        newOrganization: {
            org_name: ''
        },
        newWorkExperience: {
            workfr: '',
            workto: '',
            work_pos: '',
            work_dept: '',
            work_salary: '',
            work_salarygrade: '',
            work_stat: '',
            work_gov: ''
        },
        newSkill: {
            skill: ''
        },
        newReference: {
            ref_fname: '',
            ref_mname: '',
            ref_lname: '',
            ref_xname: '',
            ref_add: '',
            ref_cnum: ''
        },
        showAddEducationDialog: false,
        showAddOrganizationDialog: false,
        showAddWorkExperienceDialog: false,
        showAddSkillsDialog: false,
        showAddReferencesDialog: false,
        showAddChildDialog: false,
        showSuccessDialog: false,
        showUpdateDialog: false,
        showEditDialog: false,
        selectedRow: null,
        editFields: {}, // Ensure this is defined as well
        currentTabLabel: '',
    };
    },

    watch: {
    'editFields.workfr'(newVal) {
        this.validateDates(this.editFields.workfr, this.editFields.workto);
    },
    'editFields.workto'(newVal) {
        this.validateDates(this.editFields.workfr, this.editFields.workto);
    },
    'newWorkExperience.workfr'(newVal) {
        this.validateDates(this.newWorkExperience.workfr, this.newWorkExperience.workto);
    },
    'newWorkExperience.workto'(newVal) {
        this.validateDates(this.newWorkExperience.workfr, this.newWorkExperience.workto);
    }
},

    created() {
    this.fetchSuffixes();
    },

    computed: {
        filteredEditFields() {
            return Object.fromEntries(
                Object.entries(this.editFields).filter(([key]) =>
                    !key.endsWith('_count') && !key.startsWith('full') && !key.startsWith('age')
                )
            );
        },
        maxDate() {
            const today = new Date();
            const year = today.getFullYear();
            const month = (today.getMonth() + 1).toString().padStart(2, '0');
            const day = today.getDate().toString().padStart(2, '0');
            return `${year}-${month}-${day}`;
        },
        minDate() {
            const today = new Date();
            const year = today.getFullYear();
            const month = (today.getMonth() + 1).toString().padStart(2, '0');
            const day = today.getDate().toString().padStart(2, '0');
            return `${year}-${month}-${day}`;
        }
    },


    methods: {

        validateAlphabetOnly(field, model) {
        this[model][field] = this[model][field].replace(/[^a-zA-Z\s]/g, '');
        },

        validateName(field, model) {
        this[model][field] = this[model][field].replace(/[0-9]/g, '');
        },

        validateNumber(field, model) {
        this[model][field] = this[model][field].replace(/\D/g, '');
        },

        validateMobileNumber(field, model) {
        this[model][field] = this[model][field].replace(/\D/g, '').slice(0, 10);
        },

        validateTelephoneNumber(field, model) {
        this[model][field] = this[model][field].replace(/\D/g, '').slice(0, 7);
        },

        validateDates(fieldFrom, fieldTo) {
            if (fieldFrom && fieldTo) {
                if (new Date(fieldTo) < new Date(fieldFrom)) {
                    this.dateError = true;
                    fieldTo = ''; // Reset the 'to' field if the date is invalid
                } else {
                    this.dateError = false;
                }
            }
        },


        validateDecimal(field, model) {
            const value = this[model][field];
            // Regex to allow only numbers and one decimal point
            const regex = /^\d*\.?\d*$/;

            if (!regex.test(value)) {
                // If the value doesn't match the regex, strip non-numeric characters except for the first decimal
                this[model][field] = value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');
            }
        },

        fetchSuffixes() {
                fetch('/dropdown/suffixes')
                .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to fetch suffix options');
                }
                return response.json();
                })
                .then(data => {
                this.suffixes = data;
                })
                .catch(error => {
                console.error(error);
            });
        },

        tabButtonClass(tabName) {
            return {
                'px-6 py-2 rounded-t-lg font-semibold border-t border-l border-r border-gray-200': true,
                'bg-blue-900 text-white': this.activeTab === tabName,
                'bg-gray-300 text-gray-700': this.activeTab !== tabName,
            };
        },

    toggleProfileEditing() {
        console.log('Toggling profile editing:', this.isEditingProfile);
        console.log('Selected row:', this.selectedRow);
        this.isEditingProfile = !this.isEditingProfile;
    },

    onRowSelect(event) {
    console.log('Row selected:', event.data);
    this.selectedRow = event.data;
    this.openEditDialog(this.selectedRow); // Directly call the edit dialog
    },


    cancelProfileEditing() {
        this.isEditingProfile = false;
        this.selectedRow = null;
    },

    openEditDialog(row) {
        if (row) {
            console.log('Opening Edit Dialog for row:', row);
            this.editFields = { ...row }; // Deep copy of the selected row
            this.currentTabLabel = this.getCurrentTabLabel();
            this.showEditDialog = true;

        } else {
            console.log('No row selected.');
        }
    },


    hideEditDialog() {
        console.log('Hiding Edit Dialog');
        this.showEditDialog = false;
        this.selectedRow = null;  // Optionally clear the selectedRow if you want to reset the selection
    },

    saveEdit() {
    let url = '';
    let dataArray = null;
    let countField = '';

        switch (this.activeTab) {
            case 0:
                url = '/emp_child/UpdateChildData';
                dataArray = this.childData;
                countField = 'child_count';
                break;
            case 1:
                url = '/education/UpdateEducationData';
                dataArray = this.educationData;
                countField = 'educ_count';
                break;
            case 2:
                url = '/emp_org/UpdateOrganizationData';
                dataArray = this.organizationData;
                countField = 'org_count';
                break;
            case 3:
                url = '/emp_work/UpdateWorkExperienceData';
                dataArray = this.workExperienceData;
                countField = 'work_count';
                break;
            case 4:
                url = '/emp_skills/UpdateSkillsData';
                dataArray = this.skillsData;
                countField = 'skill_count';
                break;
            case 5:
                url = '/emp_reference/UpdateReferencesData';
                dataArray = this.referencesData;
                countField = 'ref_count';
                break;
            default:
                console.error('Unknown tab selected');
                return;
        }

        // Store the necessary information for updating
        this.updateUrl = url;
        this.updateDataArray = dataArray;
        this.updateCountField = countField;

        // Show the confirmation dialog
        this.showUpdateDialog = true;
    },

    // Function to proceed with the update after confirmation
    saveUpdate() {
        axios.post(this.updateUrl, this.editFields)
            .then(() => {
                const index = this.updateDataArray.findIndex(item =>
                    item.empid === this.editFields.empid &&
                    item[this.updateCountField] === this.editFields[this.updateCountField]
                );

                if (index !== -1) {
                    this.updateDataArray[index] = { ...this.editFields };
                } else {
                    console.error('Item not found');
                }

                this.showSuccessDialog = true;
                this.hideEditDialog();
                this.isEditingProfile = false;
            })
            .catch(error => {
                console.error('Error updating data:', error);
            });

        // Hide the confirmation dialog
        this.hideUpdateDialog();
    },


    isDate(value) {
        const datePattern = /^\d{4}-\d{2}-\d{2}$/;
        return typeof value === 'string' && datePattern.test(value) && !isNaN(Date.parse(value));
    },
    isNumeric(value) {
        return typeof value === 'number' || (typeof value === 'string' && !isNaN(Number(value)));
    },
    getInputType(key, value) {
        if (this.isDate(value)) {
            return 'date';
        } else {
            return 'text';
        }
    },

        formatFieldLabel(key) {
            return key.charAt(0).toUpperCase() + key.slice(1).replace(/_/g, ' ');
        },

        getCurrentTabLabel() {
            switch (this.activeTab) {
                case 0: return 'Child';
                case 1: return 'Education';
                case 2: return 'Organization';
                case 3: return 'Work Experience';
                case 4: return 'Skills';
                case 5: return 'References';
                default: return '';
            }
        },

        updateData() {
            const urlMap = {
                0: '/emp_child/UpdateChildData',
                1: '/education/UpdateEducationData',
                2: '/emp_org/UpdateOrganizationData',
                3: '/emp_work/UpdateWorkExperienceData',
                4: '/emp_skills/UpdateSkillsData',
                5: '/emp_reference/UpdateReferencesData'
            };

            axios.post(urlMap[this.activeTab], this.editFields)
                .then(() => {
                    this.showSuccessDialog = true;
                    this.hideEditDialog();
                    this.isEditingProfile = false;
                })
                .catch(error => {
                    console.error('Error updating data:', error);
                });
        },

        toggleFamilyEditing() {
            if (!this.isEditingFamily) {
                // Save the current state of fields to allow canceling
                this.originalFamilyFields = JSON.parse(JSON.stringify(this.fields));
            }
            this.isEditingFamily = !this.isEditingFamily;
        },

        cancelFamilyEditing() {
            // Revert changes by restoring original fields
            this.fields = JSON.parse(JSON.stringify(this.originalFamilyFields));
            this.isEditingFamily = false;
        },

            fetchFather() {
            axios.get('/emp_father/Father')
                .then(response => {
                    this.fields.fatherSurname = response.data.fatherSurname;
                    this.fields.fatherFirstName = response.data.fatherFirstName;
                    this.fields.fatherMiddleName = response.data.fatherMiddleName;
                    this.fields.fatherExtName = response.data.fatherExtName;
                })
                .catch(error => {
                    this.errorMessage = 'Failed to load father.';
                });
        },

        fetchMother() {
            axios.get('/emp_mother/Mother')
                .then(response => {
                    this.fields.motherMaidenName = response.data.motherMaidenName;
                    this.fields.motherSurname = response.data.motherSurname;
                    this.fields.motherFirstName = response.data.motherFirstName;
                    this.fields.motherMiddleName = response.data.motherMiddleName;
                })
                .catch(error => {
                    this.errorMessage = 'Failed to load mother.';
                });
        },

        fetchSpouse() {
            axios.get('/emp_spouse/Spouse')
                .then(response => {
                    this.fields.spouseSurname = response.data.spouseSurname;
                    this.fields.spouseFirstName = response.data.spouseFirstName;
                    this.fields.spouseMiddleName = response.data.spouseMiddleName;
                    this.fields.spouseExtName = response.data.spouseExtName;
                    this.fields.spouseOccupation = response.data.spouseOccupation;
                    this.fields.spouseBusinessName = response.data.spouseBusinessName;
                    this.fields.spouseBusinessAddress = response.data.spouseBusinessAddress;
                    this.fields.spouseTelNo = response.data.spouseTelNo;
                })
                .catch(error => {
                    this.errorMessage = 'Failed to load spouse.';
                });
        },

        updateFamilyData() {
            axios.patch('/EmpFamily/updateFamilyData', this.fields)
                .then(() => {
                    this.isEditing = false;
                    this.showUpdateDialog = false;
                    this.showSuccessDialog = true;
                    this.isEditingFamily = false;
                })
                .catch(error => {
                    this.errorMessage = 'Failed to update Family. Please try again.';
                    this.showUpdateDialog = false;
                });
        }
    },


    mounted() {
        this.fetchFather();
        this.fetchMother();
        this.fetchSpouse();
    },

    setup() {
        const activeTab = ref(0);

        const childData = ref([]);
        const educationData = ref([]);
        const organizationData = ref([]);
        const workExperienceData = ref([]);
        const skillsData = ref([]);
        const referencesData = ref([]);
        const newChild = ref({
            child_fname: '',
            child_mname: '',
            child_lname: '',
            child_xname: '',
            child_dob: ''
        });
        const newEducation = ref({
            educ_level: '',
            educ_school: '',
            educ_degree: '',
            educ_from: '',
            educ_hl_earned: '',
            educ_year_grad: '',
            educ_academic_honor: ''
        });

        const newOrganization = ref({
            org_name: ''
        });

        const newWorkExperience = ref({
            workfr: '',
            workto: '',
            work_pos: '',
            work_dept: '',
            work_salary: '',
            work_salarygrade: '',
            work_stat: '',
            work_gov: ''
        });

        const newSkill = ref({
            skill: ''
        });

        const newReference = ref({
            ref_fname: '',
            ref_mname: '',
            ref_lname: '',
            ref_xname: '',
            ref_add: '',
            ref_cnum: ''
        });

        const showAddEducationDialog = ref(false);
        const showAddOrganizationDialog = ref(false);
        const showAddWorkExperienceDialog = ref(false);
        const showAddSkillsDialog = ref(false);
        const showAddReferencesDialog = ref(false);
        const showAddChildDialog = ref(false);
        const showSuccessDialog = ref(false);
        const showUpdateDialog = ref(false);

        const openAddDialog = () => {
            if (activeTab.value === 0) {
                showAddChildDialog.value = true;
            } else if (activeTab.value === 1) {
                showAddEducationDialog.value = true;
            } else if (activeTab.value === 2) {
                showAddOrganizationDialog.value = true;
            } else if (activeTab.value === 3) {
                showAddWorkExperienceDialog.value = true;
            } else if (activeTab.value === 4) {
                showAddSkillsDialog.value = true;
            } else if (activeTab.value === 5) {
                showAddReferencesDialog.value = true;
            }
        };

        const fetchEducationData = async () => {
            try {
                const response = await axios.get('/education/EducationData');
                educationData.value = response.data;
            } catch (error) {
                console.error('Error fetching education data:', error);
            }
        };

        const fetchOrganizationData = async () => {
            try {
                const response = await axios.get('/emp_org/OrganizationData');
                organizationData.value = response.data;
            } catch (error) {
                console.error('Error fetching organization data:', error);
            }
        };

        const fetchWorkExperienceData = async () => {
            try {
                const response = await axios.get('/emp_work/WorkExperienceData');
                workExperienceData.value = response.data;
            } catch (error) {
                console.error('Error fetching work experience data:', error);
            }
        };

        const fetchSkillsData = async () => {
            try {
                const response = await axios.get('/emp_skills/SkillsData');
                skillsData.value = response.data;
            } catch (error) {
                console.error('Error fetching skills data:', error);
            }
        };

        const fetchReferencesData = () => {
    return axios.get('/emp_reference/ReferencesData')
        .then(response => {
            referencesData.value = response.data;
        })
        .catch(error => {
            // Handle error and optionally update error message or state
            console.error('Error fetching references data:', error);
            throw error; // Rethrow the error if needed for further handling
        });
};


        const fetchChildData = () => {
            return axios.get('/emp_child/ChildData')
                .then(response => {
                    // Assuming childData is a reactive reference or a state variable
                    childData.value = response.data;
                })
                .catch(error => {
                    console.error('Error fetching child data:', error);
                    // Optionally set an error message or state variable
                    errorMessage.value = 'Failed to load child data.';
                    throw error; // Rethrow the error if needed
                });
        };


        const addEducation = async () => {
            try {
                const response = await axios.post('/education/AddEducationData', newEducation.value);
                educationData.value.push(response.data);
                showAddEducationDialog.value = false;
                showSuccessDialog.value = true;
                clearNewEducationForm();
            } catch (error) {
                console.error('Error adding education data:', error);
            }
        };

        const addOrganization = async () => {
            try {
                const response = await axios.post('/emp_org/AddOrganizationData', newOrganization.value);
                organizationData.value.push(response.data);
                showAddOrganizationDialog.value = false;
                showSuccessDialog.value = true;
                clearNewOrganizationForm();
            } catch (error) {
                console.error('Error adding organization data:', error);
            }
        };

        const addWorkExperience = async () => {
            try {
                const response = await axios.post('/emp_work/AddWorkExperienceData', newWorkExperience.value);
                workExperienceData.value.push(response.data);
                showAddWorkExperienceDialog.value = false;
                showSuccessDialog.value = true;
                clearNewWorkExperienceForm();
            } catch (error) {
                console.error('Error adding work experience data:', error);
            }
        };

        const addSkill = async () => {
            try {
                const response = await axios.post('/emp_skills/AddSkillData', newSkill.value);
                skillsData.value.push(response.data);
                showAddSkillsDialog.value = false;
                showSuccessDialog.value = true;
                clearNewSkillForm();
            } catch (error) {
                console.error('Error adding skill data:', error);
            }
        };

        const addReference = async () => {
            try {
                const response = await axios.post('/emp_reference/AddReferenceData', newReference.value);
                referencesData.value.push(response.data);
                showAddReferencesDialog.value = false;
                showSuccessDialog.value = true;
                clearNewReferenceForm();
            } catch (error) {
                console.error('Error adding reference data:', error);
            }
        };

        const addChild = async () => {
            try {
                const response = await axios.post('/emp_child/AddChildData', newChild.value);
                childData.value.push(response.data);
                showAddChildDialog.value = false;
                showSuccessDialog.value = true;
                clearNewChildForm();
            } catch (error) {
                console.error('Error adding child data:', error);
            }
        };

        const clearNewChildForm = () => {
            newChild.value = {
                child_fname: '',
                child_mname: '',
                child_lname: '',
                child_xname: '',
                child_dob: ''
            };
        };

        const clearNewEducationForm = () => {
            newEducation.value = {
                educ_level: '',
                educ_school: '',
                educ_degree: '',
                educ_from: '',
                educ_hl_earned: '',
                educ_year_grad: '',
                educ_academic_honor: ''
            };
        };

        const clearNewOrganizationForm = () => {
            newOrganization.value = {
                org_name: ''
            };
        };

        const clearNewWorkExperienceForm = () => {
            newWorkExperience.value = {
                workfr: '',
                workto: '',
                work_pos: '',
                work_dept: '',
                work_salary: '',
                work_salarygrade: '',
                work_stat: '',
                work_gov: ''
            };
        };

        const clearNewSkillForm = () => {
            newSkill.value = {
                skill: ''
            };
        };

        const clearNewReferenceForm = () => {
            newReference.value = {
                ref_fname: '',
                ref_mname: '',
                ref_lname: '',
                ref_xname: '',
                ref_add: '',
                ref_cnum: ''
            };
        };

        const hideAddEducationDialog = () => {
            showAddEducationDialog.value = false;
        };

        const hideAddOrganizationDialog = () => {
            showAddOrganizationDialog.value = false;
        };

        const hideAddWorkExperienceDialog = () => {
            showAddWorkExperienceDialog.value = false;
        };

        const hideAddSkillsDialog = () => {
            showAddSkillsDialog.value = false;
        };

        const hideAddReferencesDialog = () => {
            showAddReferencesDialog.value = false;
        };

        const hideSuccessDialog = async () => {
            showSuccessDialog.value = false; // Hide the success modal

            try {
                await fetchChildData(); // Fetch child data
                await fetchReferencesData(); // Fetch references data
                isEditingFamily.value = false;
            } catch (error) {
                // Handle any errors from either fetch operation
                console.error('Error during data fetching:', error);
            }
        };


        const confirmUpdate = () => {
            showUpdateDialog.value = true;
        };

        const hideUpdateDialog = () => {
            showUpdateDialog.value = false;
        };


        const hideAddChildDialog = () => {
            showAddChildDialog.value = false;
        };

        const searchQuery = ref('');

        const search = () => {
            const searchLower = searchQuery.value.toLowerCase();
            if (searchLower.includes('family')) {
                activeTab.value = 0;
            } else if (searchLower.includes('education')) {
                activeTab.value = 1;
            } else if (searchLower.includes('organization')) {
                activeTab.value = 2;
            } else if (searchLower.includes('work')) {
                activeTab.value = 3;
            } else if (searchLower.includes('skills')) {
                activeTab.value = 4;
            } else if (searchLower.includes('references')) {
                activeTab.value = 5;
            } else {
                alert('No matching tab found.');
            }
        };

        onMounted(() => {
            fetchEducationData();
            fetchOrganizationData();
            fetchWorkExperienceData();
            fetchSkillsData();
            fetchReferencesData();
            fetchChildData();
        });

        return {
            activeTab,
            educationData,
            organizationData,
            workExperienceData,
            skillsData,
            referencesData,
            newEducation,
            newOrganization,
            newWorkExperience,
            newSkill,
            newReference,
            showAddEducationDialog,
            showAddOrganizationDialog,
            showAddWorkExperienceDialog,
            showAddSkillsDialog,
            showAddReferencesDialog,
            showSuccessDialog,
            showUpdateDialog,
            addEducation,
            addOrganization,
            addWorkExperience,
            addSkill,
            addReference,
            clearNewEducationForm,
            clearNewOrganizationForm,
            clearNewWorkExperienceForm,
            clearNewSkillForm,
            clearNewReferenceForm,
            openAddDialog,
            hideAddEducationDialog,
            hideAddOrganizationDialog,
            hideAddWorkExperienceDialog,
            hideAddSkillsDialog,
            hideAddReferencesDialog,
            fetchEducationData,
            fetchOrganizationData,
            fetchWorkExperienceData,
            fetchSkillsData,
            fetchReferencesData,
            searchQuery,
            search,
            childData,
            newChild,
            showAddChildDialog,
            showSuccessDialog,
            showUpdateDialog,
            addChild,
            clearNewChildForm,
            hideAddChildDialog,
            hideSuccessDialog,
            confirmUpdate,
            hideUpdateDialog
        };
    }
};
</script>

<style scoped>
.input-field {
    width: 100%;
    padding: 8px;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
}

.disabled-input {
    color: #707A88;
    background-color: #eeeeee;
}

.grid-cols-5 {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
}

.col-span-1 {
    grid-column: span 1 / span 1;
}

.col-span-2 {
    grid-column: span 2 / span 2;
}

.mt-8 {
    margin-top: 2rem;
}

.border-t-2 {
    border-top-width: 2px;
}

.my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
}

.text-lg {
    font-size: 1.125rem;
}

.font-semibold {
    font-weight: 600;
}

.custom-cancel-button {
  background-color: #dc3545 !important; /* Red background for cancel button */
  border-color: #dc3545 !important; /* Red border for cancel button */
}

.custom-cancel-button:hover {
  background-color: #e57373 !important; /* Lighter red for hover state */
  border-color: #e57373 !important; /* Lighter red border for hover state */
}

.error-message {
    color: red;
    font-size: 0.9em;
}
</style>
