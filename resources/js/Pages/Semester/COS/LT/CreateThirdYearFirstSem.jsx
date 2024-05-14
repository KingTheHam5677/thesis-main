import AdminAuthenticated from "@/Layouts/AdminAuthenticatedLayout";
import React from "react";
import { Head, useForm, Link } from "@inertiajs/react";
import InputLabel from "@/Components/InputLabel";
import TextInput from "@/Components/TextInput";
import InputError from "@/Components/InputError";

const CreateThirdYearFirstSem = ({ auth }) => {
  const { data, setData, post, errors, reset } = useForm({
    course_code: "",
    description: "",
    units: "",
    prerequisite: "",
    corequisite: "",
  });

  const onSubmit = (e) => {
    e.preventDefault();
    const requestData = {
      data: {
        course_code: data.course_code,
        description: data.description,
        units: data.units,
        prerequisite: data.prerequisite,
        corequisite: data.corequisite,
      },
      component: "CreateThirdYearFirstSem", // Component identifier
      source: "LTStem", // Source parameter
    };

    post(route("thirdyearfirstsem.store", requestData));
  };

  return (
    <AdminAuthenticated
      user={auth.user}
      header={
        <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Third Year - 1ST Semester
        </h2>
      }
    >
      <Head title="First Year First Semester" />
      <div className="py-12 flex justify-center">
        <div className="max-w-4xl sm:px-6 lg:px-8 w-full">
          <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div className="p-6 text-gray-900 dark:text-gray-100"></div>

            <h2 className="ml-8 text-xl font-bold text-gray-800 dark:text-gray-200 mb-4">
              Add Subject
            </h2>
            <form
              onSubmit={onSubmit}
              className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg"
            >
              <div>
                <InputLabel htmlFor="course_code" value="COURSE CODE" />
                <TextInput
                  id="course_code"
                  type="text"
                  name="name"
                  value={data.course_code}
                  className="mt-1 block w-full"
                  isFocused={true}
                  onChange={(e) => setData("course_code", e.target.value)}
                  required
                />
                <InputError message={errors.course_code} className="mt-2" />
              </div>
              <div className="mt-4">
                <InputLabel htmlFor="description" value="DESCRIPTION" />

                <TextInput
                  id="description"
                  type="text"
                  name="description"
                  value={data.description}
                  className="mt-1 block w-full"
                  isFocused={true}
                  onChange={(e) => setData("description", e.target.value)}
                  required
                />

                <InputError message={errors.description} className="mt-2" />
                <div className="mt-4">
                  <InputLabel htmlFor="units" value="UNITS" />

                  <TextInput
                    id="units"
                    type="text"
                    name="units"
                    value={data.units}
                    className="mt-1 block w-full"
                    isFocused={true}
                    onChange={(e) => {
                      const newValue = e.target.value;
                      // Check if the new value is a non-negative number
                      if (/^\d*\.?\d*$/.test(newValue) || newValue === "") {
                        setData("units", newValue); // Update state with the new value
                      }
                    }}
                    required
                  />

                  <InputError message={errors.units} className="mt-2" />
                </div>

                <div className="mt-4">
                  <InputLabel htmlFor="prerequisite" value="PREREQUISITE" />

                  <TextInput
                    id="prerequisite"
                    type="text"
                    name="prerequisite"
                    value={data.prerequisite}
                    className="mt-1 block w-full"
                    isFocused={true}
                    onChange={(e) => setData("prerequisite", e.target.value)}
                  />

                  <InputError message={errors.prerequisite} className="mt-2" />
                </div>
                <div className="mt-4">
                  <InputLabel htmlFor="corequisite" value="COREQUISITE" />

                  <TextInput
                    id="corequisite"
                    type="text"
                    name="corequisite"
                    value={data.corequisite}
                    className="mt-1 block w-full"
                    isFocused={true}
                    onChange={(e) => setData("corequisite", e.target.value)}
                  />

                  <InputError message={errors.corequisite} className="mt-2" />
                </div>
              </div>
              <div className="mt-4 text-right">
                <Link
                  href={route("admin.curriculum")}
                  className="bg-gray-100 py-1 px-3 text-gray-800 rounded shadow transition-all hover:bg-gray-400 mr-2"
                >
                  Cancel
                </Link>
                <button className="bg-black py-1 px-3 text-white rounded shadow transition-all hover:bg-gray-400">
                  Add
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </AdminAuthenticated>
  );
};

export default CreateThirdYearFirstSem;
