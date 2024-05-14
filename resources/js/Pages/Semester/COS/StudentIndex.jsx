import Authenticated from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

const Studentindex = ({ auth, semesters }) => {
  return (
    <Authenticated
      user={auth.user}
      header={
        <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
          Curriculum
        </h2>
      }
    >
      <Head title="Curriculum" />
      <div className="flex justify-center">
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <div className="py-1 bg-yellow-300 flex justify-center items-center">
                  <h2 className="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    FIRST YEAR - 1ST Semester
                  </h2>
                </div>

                <table className="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
                  <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-black">
                    <tr className="text-center">
                      <th className="px-3 py-2">Course Code</th>
                      <th className="px-3 py-2">Description</th>
                      <th className="px-3 py-2">Units</th>
                      <th className="px-3 py-2">Prerequisite</th>
                      <th className="px-3 py-2">Co-requisite</th>
                    </tr>
                  </thead>
                  <tbody>
                    {semesters.data.map((semester) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={semester.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.corequisite}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <div className="py-1 bg-yellow-300 flex justify-center items-center">
                  <h2 className="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    FIRST YEAR - 2nd Semester
                  </h2>
                </div>

                <table className="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
                  <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-black">
                    <tr className="text-center">
                      <th className="px-3 py-2">Course Code</th>
                      <th className="px-3 py-2">Description</th>
                      <th className="px-3 py-2">Units</th>
                      <th className="px-3 py-2">Prerequisite</th>
                      <th className="px-3 py-2">Co-requisite</th>
                    </tr>
                  </thead>
                  <tbody>
                    {semesters.data.map((semester) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={semester.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.corequisite}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="flex justify-center">
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <div className="py-1 bg-cyan-400 flex justify-center items-center">
                  <h2 className="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    SECOND YEAR - 1ST Semester
                  </h2>
                </div>

                <table className="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
                  <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-black">
                    <tr className="text-center">
                      <th className="px-3 py-2">Course Code</th>
                      <th className="px-3 py-2">Description</th>
                      <th className="px-3 py-2">Units</th>
                      <th className="px-3 py-2">Prerequisite</th>
                      <th className="px-3 py-2">Co-requisite</th>
                    </tr>
                  </thead>
                  <tbody>
                    {semesters.data.map((semester) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={semester.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.corequisite}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <div className="py-1 bg-cyan-400 flex justify-center items-center">
                  <h2 className="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    SECOND YEAR - 2nd Semester
                  </h2>
                </div>

                <table className="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
                  <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-black">
                    <tr className="text-center">
                      <th className="px-3 py-2">Course Code</th>
                      <th className="px-3 py-2">Description</th>
                      <th className="px-3 py-2">Units</th>
                      <th className="px-3 py-2">Prerequisite</th>
                      <th className="px-3 py-2">Co-requisite</th>
                    </tr>
                  </thead>
                  <tbody>
                    {semesters.data.map((semester) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={semester.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.corequisite}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="flex justify-center">
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <div className="py-1 bg-green-500 flex justify-center items-center">
                  <h2 className="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    THIRD YEAR - 1ST Semester
                  </h2>
                </div>

                <table className="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
                  <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-black">
                    <tr className="text-center">
                      <th className="px-3 py-2">Course Code</th>
                      <th className="px-3 py-2">Description</th>
                      <th className="px-3 py-2">Units</th>
                      <th className="px-3 py-2">Prerequisite</th>
                      <th className="px-3 py-2">Co-requisite</th>
                    </tr>
                  </thead>
                  <tbody>
                    {semesters.data.map((semester) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={semester.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.corequisite}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <div className="py-1 bg-green-500 flex justify-center items-center">
                  <h2 className="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    THIRD YEAR - 2nd Semester
                  </h2>
                </div>

                <table className="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
                  <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-black">
                    <tr className="text-center">
                      <th className="px-3 py-2">Course Code</th>
                      <th className="px-3 py-2">Description</th>
                      <th className="px-3 py-2">Units</th>
                      <th className="px-3 py-2">Prerequisite</th>
                      <th className="px-3 py-2">Co-requisite</th>
                    </tr>
                  </thead>
                  <tbody>
                    {semesters.data.map((semester) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={semester.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.corequisite}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="flex justify-center">
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <div className="py-1 bg-red-600 flex justify-center items-center">
                  <h2 className="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    FOURTH YEAR - 1ST Semester
                  </h2>
                </div>

                <table className="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
                  <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-black">
                    <tr className="text-center">
                      <th className="px-3 py-2">Course Code</th>
                      <th className="px-3 py-2">Description</th>
                      <th className="px-3 py-2">Units</th>
                      <th className="px-3 py-2">Prerequisite</th>
                      <th className="px-3 py-2">Co-requisite</th>
                    </tr>
                  </thead>
                  <tbody>
                    {semesters.data.map((semester) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={semester.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.corequisite}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <div className="py-1 bg-red-600 flex justify-center items-center">
                  <h2 className="text-2xl font-bold text-gray-800 dark:text-gray-200">
                    FOURTH YEAR - 2nd Semester
                  </h2>
                </div>

                <table className="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
                  <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-black">
                    <tr className="text-center">
                      <th className="px-3 py-2">Course Code</th>
                      <th className="px-3 py-2">Description</th>
                      <th className="px-3 py-2">Units</th>
                      <th className="px-3 py-2">Prerequisite</th>
                      <th className="px-3 py-2">Co-requisite</th>
                    </tr>
                  </thead>
                  <tbody>
                    {semesters.data.map((semester) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={semester.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {semester.corequisite}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Authenticated>
  );
};

export default Studentindex;
