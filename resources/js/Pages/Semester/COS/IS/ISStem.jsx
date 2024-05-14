import React from "react";
import { Link, usePage } from "@inertiajs/react";

const ISStem = () => {
  const {
    firstyearfirstsemIS,
    firstyearsecondsemIS,
    secondyearfirstsemIS,
    secondyearsecondsemIS,
    thirdyearfirstsemIS,
    thirdyearsecondsemIS,
    fourthyearfirstsemIS,
    fourthyearsecondsemIS,
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
                      source: "ISStem",
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
                    {firstyearfirstsemIS.map((firstyearfirstsemIS) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={firstyearfirstsemIS.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemIS.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemIS.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemIS.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemIS.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearfirstsemIS.corequisite}
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
                      source: "ISStem",
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
                    {firstyearsecondsemIS.map((firstyearsecondsemIS) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={firstyearsecondsemIS.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemIS.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemIS.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemIS.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemIS.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {firstyearsecondsemIS.corequisite}
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
                      source: "ISStem",
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
                    {secondyearfirstsemIS.map((secondyearfirstsemIS) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={secondyearfirstsemIS.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemIS.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemIS.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemIS.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemIS.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearfirstsemIS.corequisite}
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
                      source: "ISStem",
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
                    {secondyearsecondsemIS.map((secondyearsecondsemIS) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={secondyearsecondsemIS.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemIS.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemIS.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemIS.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemIS.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {secondyearsecondsemIS.corequisite}
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
                      source: "ISStem",
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
                    {thirdyearfirstsemIS.map((thirdyearfirstsemIS) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={thirdyearfirstsemIS.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemIS.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemIS.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemIS.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemIS.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearfirstsemIS.corequisite}
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
                      source: "ISStem",
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
                    {thirdyearsecondsemIS.map((thirdyearsecondsemIS) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={thirdyearsecondsemIS.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemIS.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemIS.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemIS.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemIS.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {thirdyearsecondsemIS.corequisite}
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
                      source: "ISStem",
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
                    {fourthyearfirstsemIS.map((fourthyearfirstsemIS) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={fourthyearfirstsemIS.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemIS.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemIS.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemIS.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemIS.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearfirstsemIS.corequisite}
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
                      source: "ISStem",
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
                    {fourthyearsecondsemIS.map((fourthyearsecondsemIS) => (
                      <tr
                        className="text-center bg-white dark:bg-gray-800"
                        key={fourthyearsecondsemIS.id}
                      >
                        <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemIS.course_code}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemIS.description}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemIS.units}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemIS.prerequisite}
                        </td>
                        <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                          {fourthyearsecondsemIS.corequisite}
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

export default ISStem;
