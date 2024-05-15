import React from "react";
import { Link, usePage } from "@inertiajs/react";

const WTNonstem = () => {
  const {
    firstyearfirstsemnonstemIT,
    firstyearsecondsemnonstemIT,
    secondyearfirstsemnonstemIT,
    secondyearsecondsemnonstemIT,
    thirdyearfirstsemnonstemIT,
    thirdyearsecondsemnonstemIT,
    fourthyearfirstsemnonstemIT,
    fourthyearsecondsemnonstemIT,
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
                      source: "WTNonstem",
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
                    {firstyearfirstsemnonstemIT.map(
                      (firstyearfirstsemnonstemIT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearfirstsemnonstemIT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIT.corequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Edit
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Remove
                          </td>
                        </tr>
                      )
                    )}
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
                      source: "WTNonstem",
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
                    {firstyearsecondsemnonstemIT.map(
                      (firstyearsecondsemnonstemIT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearsecondsemnonstemIT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIT.corequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Edit
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Remove
                          </td>
                        </tr>
                      )
                    )}
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
                      source: "WTNonstem",
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
                    {secondyearfirstsemnonstemIT.map(
                      (secondyearfirstsemnonstemIT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearfirstsemnonstemIT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIT.corequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Edit
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Remove
                          </td>
                        </tr>
                      )
                    )}
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
                      source: "WTNonstem",
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
                    {secondyearsecondsemnonstemIT.map(
                      (secondyearsecondsemnonstemIT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearsecondsemnonstemIT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIT.corequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Edit
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Remove
                          </td>
                        </tr>
                      )
                    )}
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
                      source: "WTNonstem",
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
                    {thirdyearfirstsemnonstemIT.map(
                      (thirdyearfirstsemnonstemIT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearfirstsemnonstemIT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIT.corequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Edit
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Remove
                          </td>
                        </tr>
                      )
                    )}
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
                      source: "WTNonstem",
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
                    {thirdyearsecondsemnonstemIT.map(
                      (thirdyearsecondsemnonstemIT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearsecondsemnonstemIT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIT.corequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Edit
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Remove
                          </td>
                        </tr>
                      )
                    )}
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
                      source: "WTNonstem",
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
                    {fourthyearfirstsemnonstemIT.map(
                      (fourthyearfirstsemnonstemIT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearfirstsemnonstemIT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIT.corequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Edit
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Remove
                          </td>
                        </tr>
                      )
                    )}
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
                      source: "WTNonstem",
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
                    {fourthyearsecondsemnonstemIT.map(
                      (fourthyearsecondsemnonstemIT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearsecondsemnonstemIT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIT.corequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Edit
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            Remove
                          </td>
                        </tr>
                      )
                    )}
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

export default WTNonstem;
