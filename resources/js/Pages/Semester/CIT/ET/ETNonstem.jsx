import React from "react";
import { Link, usePage } from "@inertiajs/react";

const ETNonstem = () => {
  const {
    firstyearfirstsemnonstemIS,
    firstyearsecondsemnonstemIS,
    secondyearfirstsemnonstemIS,
    secondyearsecondsemnonstemIS,
    thirdyearfirstsemnonstemIS,
    thirdyearsecondsemnonstemIS,
    fourthyearfirstsemnonstemIS,
    fourthyearsecondsemnonstemIS,
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
                      source: "ETNonstem",
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
                    {firstyearfirstsemnonstemIS.map(
                      (firstyearfirstsemnonstemIS) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearfirstsemnonstemIS.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIS.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIS.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIS.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIS.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemIS.corequisite}
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
                      source: "ETNonstem",
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
                    {firstyearsecondsemnonstemIS.map(
                      (firstyearsecondsemnonstemIS) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearsecondsemnonstemIS.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIS.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIS.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIS.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIS.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemIS.corequisite}
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
                      source: "ETNonstem",
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
                    {secondyearfirstsemnonstemIS.map(
                      (secondyearfirstsemnonstemIS) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearfirstsemnonstemIS.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIS.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIS.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIS.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIS.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemIS.corequisite}
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
                      source: "ETNonstem",
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
                    {secondyearsecondsemnonstemIS.map(
                      (secondyearsecondsemnonstemIS) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearsecondsemnonstemIS.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIS.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIS.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIS.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIS.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemIS.corequisite}
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
                      source: "ETNonstem",
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
                    {thirdyearfirstsemnonstemIS.map(
                      (thirdyearfirstsemnonstemIS) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearfirstsemnonstemIS.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIS.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIS.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIS.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIS.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemIS.corequisite}
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
                      source: "ETNonstem",
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
                    {thirdyearsecondsemnonstemIS.map(
                      (thirdyearsecondsemnonstemIS) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearsecondsemnonstemIS.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIS.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIS.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIS.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIS.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemIS.corequisite}
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
                      source: "ETNonstem",
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
                    {fourthyearfirstsemnonstemIS.map(
                      (fourthyearfirstsemnonstemIS) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearfirstsemnonstemIS.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIS.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIS.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIS.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIS.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemIS.corequisite}
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
                      source: "ETNonstem",
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
                    {fourthyearsecondsemnonstemIS.map(
                      (fourthyearsecondsemnonstemIS) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearsecondsemnonstemIS.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIS.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIS.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIS.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIS.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemIS.corequisite}
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

export default ETNonstem;
