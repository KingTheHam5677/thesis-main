import React from "react";
import { Link, usePage } from "@inertiajs/react";

const CETStem = () => {
  const {
    firstyearfirstsemES,
    firstyearsecondsemES,
    secondyearfirstsemES,
    secondyearsecondsemES,
    thirdyearfirstsemES,
    thirdyearsecondsemES,
    fourthyearfirstsemES,
    fourthyearsecondsemES,
  } = usePage().props;
  return (
    <>
      <div className="flex justify-center">
        <div className="py-12">
          <div className="max-w-4xl sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                <h3 className="text-xs font-bold ml-auto text-gray-800 dark:text-gray-200 cursor-pointer mb-2">
                  <Link
                    href={route("firstyearfirstsem.create", {
                      source: "CETStem",
                    })}
                  >
                    <span className="text-blue-500 hover:underline">
                      Click Add/Edit Curriculum
                    </span>
                  </Link>
                </h3>
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
                    {firstyearfirstsemES.map((firstyearfirstsemES) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={firstyearfirstsemES.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemES.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemES.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemES.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemES.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemES.corequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Edit
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Remove
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
                <h3 className="text-xs font-bold ml-auto text-gray-800 dark:text-gray-200 cursor-pointer mb-2">
                  <Link
                    href={route("firstyearsecondsem.create", {
                      source: "CETStem",
                    })}
                  >
                    <span className="text-blue-500 hover:underline">
                      Click Add/Edit Curriculum
                    </span>
                  </Link>
                </h3>
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
                    {firstyearsecondsemES.map((firstyearsecondsemES) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={firstyearsecondsemES.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemES.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemES.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemES.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemES.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemES.corequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Edit
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Remove
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
                <h3 className="text-xs font-bold ml-auto text-gray-800 dark:text-gray-200 cursor-pointer mb-2">
                  <Link
                    href={route("secondyearfirstsem.create", {
                      source: "CETStem",
                    })}
                  >
                    <span className="text-blue-500 hover:underline">
                      Click Add/Edit Curriculum
                    </span>
                  </Link>
                </h3>
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
                    {secondyearfirstsemES.map((secondyearfirstsemES) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={secondyearfirstsemES.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemES.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemES.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemES.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemES.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemES.corequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Edit
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Remove
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
                <h3 className="text-xs font-bold ml-auto text-gray-800 dark:text-gray-200 cursor-pointer mb-2">
                  <Link
                    href={route("secondyearsecondsem.create", {
                      source: "CETStem",
                    })}
                  >
                    <span className="text-blue-500 hover:underline">
                      Click Add/Edit Curriculum
                    </span>
                  </Link>
                </h3>
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
                    {secondyearsecondsemES.map((secondyearsecondsemES) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={secondyearsecondsemES.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemES.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemES.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemES.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemES.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemES.corequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Edit
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Remove
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
                <h3 className="text-xs font-bold ml-auto text-gray-800 dark:text-gray-200 cursor-pointer mb-2">
                  <Link
                    href={route("thirdyearfirstsem.create", {
                      source: "CETStem",
                    })}
                  >
                    <span className="text-blue-500 hover:underline">
                      Click Add/Edit Curriculum
                    </span>
                  </Link>
                </h3>
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
                    {thirdyearfirstsemES.map((thirdyearfirstsemES) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={thirdyearfirstsemES.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemES.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemES.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemES.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemES.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemES.corequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Edit
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Remove
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
                <h3 className="text-xs font-bold ml-auto text-gray-800 dark:text-gray-200 cursor-pointer mb-2">
                  <Link
                    href={route("thirdyearsecondsem.create", {
                      source: "CETStem",
                    })}
                  >
                    <span className="text-blue-500 hover:underline">
                      Click Add/Edit Curriculum
                    </span>
                  </Link>
                </h3>
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
                    {thirdyearsecondsemES.map((thirdyearsecondsemES) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={thirdyearsecondsemES.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemES.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemES.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemES.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemES.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemES.corequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Edit
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Remove
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
                <h3 className="text-xs font-bold ml-auto text-gray-800 dark:text-gray-200 cursor-pointer mb-2">
                  <Link
                    href={route("fourthyearfirstsem.create", {
                      source: "CETStem",
                    })}
                  >
                    <span className="text-blue-500 hover:underline">
                      Click Add/Edit Curriculum
                    </span>
                  </Link>
                </h3>
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
                    {fourthyearfirstsemES.map((fourthyearfirstsemES) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={fourthyearfirstsemES.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemES.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemES.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemES.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemES.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemES.corequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Edit
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Remove
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
                <h3 className="text-xs font-bold ml-auto text-gray-800 dark:text-gray-200 cursor-pointer mb-2">
                  <Link
                    href={route("fourthyearsecondsem.create", {
                      source: "CETStem",
                    })}
                  >
                    <span className="text-blue-500 hover:underline">
                      Click Add/Edit Curriculum
                    </span>
                  </Link>
                </h3>
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
                    {fourthyearsecondsemES.map((fourthyearsecondsemES) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={fourthyearsecondsemES.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemES.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemES.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemES.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemES.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemES.corequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Edit
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          Remove
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
    </>
  );
};

export default CETStem;
