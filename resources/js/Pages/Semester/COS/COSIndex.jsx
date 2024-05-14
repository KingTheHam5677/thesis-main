import AdminAuthenticated from "@/Layouts/AdminAuthenticatedLayout";
import React, { useState } from "react";
import { Head } from "@inertiajs/react";
import CSStem from "./CS/CSStem";
import CSNonstem from "./CS/CSNonstem";
import ISStem from "./IS/ISStem";
import ISNonstem from "./IS/ISNonstem";
import ITStem from "./IT/ITStem";
import ITNonstem from "./IT/ITNonstem";
import LTStem from "./LT/LTStem";
import LTNonstem from "./LT/LTNonstem";
import ESStem from "./ES/ESStem";
import ESNonstem from "./ES/ESNonstem";

const COSIndex = ({ auth }) => {
  const [selectedCurriculum, setSelectedCurriculum] = useState(
    "Bachelor of Science in Computer Science - STEM"
  );

  const handleCurriculumChange = (e) => {
    setSelectedCurriculum(e.target.value);
  };

  const shouldRenderTable = (curriculumType) => {
    return selectedCurriculum === curriculumType;
  };

  return (
    <AdminAuthenticated
      user={auth.user}
      header={
        <div className="text-center flex items-center justify-between">
          <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Curriculum
          </h2>
          <select
            id="college-dept"
            className="text-xs border border-red-300 dark:border-red-700 dark:bg-red-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm"
            onChange={handleCurriculumChange}
            value={selectedCurriculum}
          >
            <option>Bachelor of Science in Computer Science - STEM</option>
            <option>Bachelor of Science in Computer Science - NONSTEM</option>
            <option>Bachelor of Science in Information Systems - STEM</option>
            <option>
              Bachelor of Science in Information Systems - NONSTEM
            </option>
            <option>
              Bachelor of Science in Information Technology - STEM
            </option>
            <option>
              Bachelor of Science in Information Technology - NONSTEM
            </option>
            <option>
              Bachelor of Applied Science in Laboratory Technology - STEM
            </option>
            <option>
              Bachelor of Applied Science in Laboratory Technology - NONSTEM
            </option>
            <option>Bachelor of Science in Environmental Science - STEM</option>
            <option>
              Bachelor of Science in Environmental Science - NONSTEM
            </option>
          </select>
        </div>
      }
    >
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Computer Science - STEM"
        ) && <CSStem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Computer Science - NONSTEM"
        ) && <CSNonstem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Information Systems - STEM"
        ) && <ISStem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Information Systems - NONSTEM"
        ) && <ISNonstem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Information Technology - STEM"
        ) && <ITStem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Information Technology - NONSTEM"
        ) && <ITNonstem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Applied Science in Laboratory Technology - STEM"
        ) && <LTStem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Applied Science in Laboratory Technology - NONSTEM"
        ) && <LTNonstem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Environmental Science - STEM"
        ) && <ESStem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Environmental Science - NONSTEM"
        ) && <ESNonstem />}
      </div>
    </AdminAuthenticated>
  );
};

export default COSIndex;
