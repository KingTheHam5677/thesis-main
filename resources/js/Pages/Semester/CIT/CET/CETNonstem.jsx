import React from "react";
import { Link, usePage } from "@inertiajs/react";

const CETNonstem = () => {
  const {
    firstyearfirstsemnonstemES,
    firstyearsecondsemnonstemES,
    secondyearfirstsemnonstemES,
    secondyearsecondsemnonstemES,
    thirdyearfirstsemnonstemES,
    thirdyearsecondsemnonstemES,
    fourthyearfirstsemnonstemES,
    fourthyearsecondsemnonstemES,
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
                      source: "CETNonstem",
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
                    {firstyearfirstsemnonstemES.map(
                      (firstyearfirstsemnonstemES) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearfirstsemnonstemES.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemES.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemES.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemES.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemES.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemES.corequisite}
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
                      source: "CETNonstem",
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
                    {firstyearsecondsemnonstemES.map(
                      (firstyearsecondsemnonstemES) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearsecondsemnonstemES.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemES.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemES.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemES.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemES.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemES.corequisite}
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
                      source: "CETNonstem",
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
                    {secondyearfirstsemnonstemES.map(
                      (secondyearfirstsemnonstemES) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearfirstsemnonstemES.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemES.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemES.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemES.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemES.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemES.corequisite}
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
                      source: "CETNonstem",
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
                    {secondyearsecondsemnonstemES.map(
                      (secondyearsecondsemnonstemES) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearsecondsemnonstemES.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemES.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemES.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemES.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemES.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemES.corequisite}
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
                      source: "CETNonstem",
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
                    {thirdyearfirstsemnonstemES.map(
                      (thirdyearfirstsemnonstemES) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearfirstsemnonstemES.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemES.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemES.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemES.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemES.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemES.corequisite}
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
                      source: "CETNonstem",
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
                    {thirdyearsecondsemnonstemES.map(
                      (thirdyearsecondsemnonstemES) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearsecondsemnonstemES.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemES.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemES.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemES.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemES.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemES.corequisite}
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
                      source: "CETNonstem",
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
                    {fourthyearfirstsemnonstemES.map(
                      (fourthyearfirstsemnonstemES) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearfirstsemnonstemES.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemES.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemES.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemES.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemES.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemES.corequisite}
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
                      source: "CETNonstem",
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
                    {fourthyearsecondsemnonstemES.map(
                      (fourthyearsecondsemnonstemES) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearsecondsemnonstemES.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemES.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemES.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemES.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemES.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemES.corequisite}
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

export default CETNonstem;
