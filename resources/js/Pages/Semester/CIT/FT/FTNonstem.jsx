import React from "react";
import { Link, usePage } from "@inertiajs/react";

const FTNonstem = () => {
  const {
    firstyearfirstsemnonstem,
    firstyearsecondsemnonstem,
    secondyearfirstsemnonstem,
    secondyearsecondsemnonstem,
    thirdyearfirstsemnonstem,
    thirdyearsecondsemnonstem,
    fourthyearfirstsemnonstem,
    fourthyearsecondsemnonstem,
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
                      source: "FTNonstem",
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
                    {firstyearfirstsemnonstem.map(
                      (firstyearfirstsemnonstem) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearfirstsemnonstem.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstem.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstem.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstem.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstem.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstem.corequisite}
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
                      source: "FTNonstem",
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
                    {firstyearsecondsemnonstem.map(
                      (firstyearsecondsemnonstem) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearsecondsemnonstem.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstem.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstem.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstem.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstem.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstem.corequisite}
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
                      source: "FTNonstem",
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
                    {secondyearfirstsemnonstem.map(
                      (secondyearfirstsemnonstem) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearfirstsemnonstem.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstem.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstem.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstem.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstem.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstem.corequisite}
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
                      source: "FTNonstem",
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
                    {secondyearsecondsemnonstem.map(
                      (secondyearsecondsemnonstem) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearsecondsemnonstem.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstem.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstem.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstem.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstem.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstem.corequisite}
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
                      source: "FTNonstem",
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
                    {thirdyearfirstsemnonstem.map(
                      (thirdyearfirstsemnonstem) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearfirstsemnonstem.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstem.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstem.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstem.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstem.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstem.corequisite}
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
                      source: "FTNonstem",
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
                    {thirdyearsecondsemnonstem.map(
                      (thirdyearsecondsemnonstem) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearsecondsemnonstem.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstem.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstem.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstem.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstem.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstem.corequisite}
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
                      source: "FTNonstem",
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
                    {fourthyearfirstsemnonstem.map(
                      (fourthyearfirstsemnonstem) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearfirstsemnonstem.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstem.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstem.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstem.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstem.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstem.corequisite}
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
                      source: "FTNonstem",
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
                    {fourthyearsecondsemnonstem.map(
                      (fourthyearsecondsemnonstem) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearsecondsemnonstem.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstem.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstem.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstem.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstem.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstem.corequisite}
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

export default FTNonstem;
