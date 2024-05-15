import React from "react";
import { Link, usePage } from "@inertiajs/react";

const ECTStem = () => {
  const {
    firstyearfirstsemLT,
    firstyearsecondsemLT,
    secondyearfirstsemLT,
    secondyearsecondsemLT,
    thirdyearfirstsemLT,
    thirdyearsecondsemLT,
    fourthyearfirstsemLT,
    fourthyearsecondsemLT,
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
                      source: "ECTStem",
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
                    {firstyearfirstsemLT.map((firstyearfirstsemLT) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={firstyearfirstsemLT.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemLT.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemLT.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemLT.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemLT.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemLT.corequisite}
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
                      source: "ECTStem",
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
                    {firstyearsecondsemLT.map((firstyearsecondsemLT) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={firstyearsecondsemLT.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemLT.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemLT.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemLT.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemLT.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemLT.corequisite}
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
                      source: "ECTStem",
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
                    {secondyearfirstsemLT.map((secondyearfirstsemLT) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={secondyearfirstsemLT.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemLT.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemLT.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemLT.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemLT.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemLT.corequisite}
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
                      source: "ECTStem",
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
                    {secondyearsecondsemLT.map((secondyearsecondsemLT) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={secondyearsecondsemLT.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemLT.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemLT.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemLT.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemLT.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemLT.corequisite}
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
                      source: "ECTStem",
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
                    {thirdyearfirstsemLT.map((thirdyearfirstsemLT) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={thirdyearfirstsemLT.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemLT.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemLT.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemLT.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemLT.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemLT.corequisite}
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
                      source: "ECTStem",
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
                    {thirdyearsecondsemLT.map((thirdyearsecondsemLT) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={thirdyearsecondsemLT.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemLT.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemLT.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemLT.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemLT.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemLT.corequisite}
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
                      source: "ECTStem",
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
                    {fourthyearfirstsemLT.map((fourthyearfirstsemLT) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={fourthyearfirstsemLT.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemLT.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemLT.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemLT.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemLT.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemLT.corequisite}
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
                      source: "ECTStem",
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
                    {fourthyearsecondsemLT.map((fourthyearsecondsemLT) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={fourthyearsecondsemLT.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemLT.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemLT.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemLT.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemLT.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemLT.corequisite}
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

export default ECTStem;
