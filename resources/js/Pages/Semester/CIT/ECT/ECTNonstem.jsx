import React from "react";
import { Link, usePage } from "@inertiajs/react";

const ECTNonStem = () => {
  const {
    firstyearfirstsemnonstemLT,
    firstyearsecondsemnonstemLT,
    secondyearfirstsemnonstemLT,
    secondyearsecondsemnonstemLT,
    thirdyearfirstsemnonstemLT,
    thirdyearsecondsemnonstemLT,
    fourthyearfirstsemnonstemLT,
    fourthyearsecondsemnonstemLT,
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
                      source: "ECTNonStem",
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
                    {firstyearfirstsemnonstemLT.map(
                      (firstyearfirstsemnonstemLT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearfirstsemnonstemLT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemLT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemLT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemLT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemLT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearfirstsemnonstemLT.corequisite}
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
                      source: "ECTNonStem",
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
                    {firstyearsecondsemnonstemLT.map(
                      (firstyearsecondsemnonstemLT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={firstyearsecondsemnonstemLT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemLT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemLT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemLT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemLT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {firstyearsecondsemnonstemLT.corequisite}
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
                      source: "ECTNonStem",
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
                    {secondyearfirstsemnonstemLT.map(
                      (secondyearfirstsemnonstemLT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearfirstsemnonstemLT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemLT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemLT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemLT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemLT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearfirstsemnonstemLT.corequisite}
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
                      source: "ECTNonStem",
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
                    {secondyearsecondsemnonstemLT.map(
                      (secondyearsecondsemnonstemLT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={secondyearsecondsemnonstemLT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemLT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemLT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemLT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemLT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {secondyearsecondsemnonstemLT.corequisite}
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
                      source: "ECTNonStem",
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
                    {thirdyearfirstsemnonstemLT.map(
                      (thirdyearfirstsemnonstemLT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearfirstsemnonstemLT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemLT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemLT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemLT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemLT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearfirstsemnonstemLT.corequisite}
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
                      source: "ECTNonStem",
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
                    {thirdyearsecondsemnonstemLT.map(
                      (thirdyearsecondsemnonstemLT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={thirdyearsecondsemnonstemLT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemLT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemLT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemLT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemLT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {thirdyearsecondsemnonstemLT.corequisite}
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
                      source: "ECTNonStem",
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
                    {fourthyearfirstsemnonstemLT.map(
                      (fourthyearfirstsemnonstemLT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearfirstsemnonstemLT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemLT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemLT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemLT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemLT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearfirstsemnonstemLT.corequisite}
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
                      source: "ECTNonStem",
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
                    {fourthyearsecondsemnonstemLT.map(
                      (fourthyearsecondsemnonstemLT) => (
                        <tr
                          className="text-center bg-white dark:bg-gray-800"
                          key={fourthyearsecondsemnonstemLT.id}
                        >
                          <td className="border-l border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemLT.course_code}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemLT.description}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemLT.units}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemLT.prerequisite}
                          </td>
                          <td className="border-b border-r dark:border-gray-700 px-3 py-2 text-black">
                            {fourthyearsecondsemnonstemLT.corequisite}
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

export default ECTNonStem;
