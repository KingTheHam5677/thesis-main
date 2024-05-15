import React from "react";
import { Link, usePage } from "@inertiajs/react";

const FTStem = () => {
  const {
    firstyearfirstsem,
    firstyearsecondsem,
    secondyearfirstsem,
    secondyearsecondsem,
    thirdyearfirstsem,
    thirdyearsecondsem,
    fourthyearfirstsem,
    fourthyearsecondsem,
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
                      source: "FTStem",
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
                    {firstyearfirstsem.map((firstyearfirstsem) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={firstyearfirstsem.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsem.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsem.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsem.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsem.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsem.corequisite}
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
                      source: "FTStem",
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
                    {firstyearsecondsem.map((firstyearsecondsem) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={firstyearsecondsem.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsem.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsem.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsem.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsem.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsem.corequisite}
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
                      source: "FTStem",
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
                    {secondyearfirstsem.map((secondyearfirstsem) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={secondyearfirstsem.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsem.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsem.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsem.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsem.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsem.corequisite}
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
                      source: "FTStem",
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
                    {secondyearsecondsem.map((secondyearsecondsem) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={secondyearsecondsem.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsem.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsem.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsem.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsem.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsem.corequisite}
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
                      source: "FTStem",
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
                    {thirdyearfirstsem.map((thirdyearfirstsem) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={thirdyearfirstsem.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsem.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsem.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsem.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsem.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsem.corequisite}
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
                      source: "FTStem",
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
                    {thirdyearsecondsem.map((thirdyearsecondsem) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={thirdyearsecondsem.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsem.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsem.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsem.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsem.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsem.corequisite}
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
                      source: "FTStem",
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
                    {fourthyearfirstsem.map((fourthyearfirstsem) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={fourthyearfirstsem.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsem.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsem.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsem.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsem.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsem.corequisite}
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
                      source: "FTStem",
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
                    {fourthyearsecondsem.map((fourthyearsecondsem) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={fourthyearsecondsem.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsem.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsem.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsem.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsem.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsem.corequisite}
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

export default FTStem;
