import AdminAuthenticated from "@/Layouts/AdminAuthenticatedLayout";
import React, { useState } from "react";
import { Head } from "@inertiajs/react";
import FTStem from "./FT/FTStem";
import FTNonstem from "./FT/FTNonstem";
import CETStem from "./CET/CETStem";
import CETNonstem from "./CET/CETNonstem";
import CTStem from "./CT/CTStem";
import CTNonstem from "./CT/CTNonstem";
import ETStem from "./ET/ETStem";
import ETNonstem from "./ET/ETNonstem";
import ECTStem from "./ECT/ECTStem";
import ECTNonstem from "./ECT/ECTNonstem";
import ICTStem from "./ICT/ICTStem";
import ICTNonstem from "./ICT/ICTNonstem";
import MTStem from "./MT/MTStem";
import MTNonstem from "./MT/MTNonstem";
import RTStem from "./RT/RTStem";
import RTNonstem from "./RT/RTNonstem";
import ATStem from "./AT/ATStem";
import ATNonstem from "./AT/ATNonstem";
import METFTStem from "./METFT/METFTStem";
import METFTNonstem from "./METFT/METFTNonstem";
import HVRTStem from "./HVRT/HVRTStem";
import HVRTNonstem from "./HVRT/HVRTNonstem";
import PPTStem from "./PPT/PPTStem";
import PPTNonstem from "./PPT/PPTNonstem";
import WTStem from "./WT/WTStem";
import WTNonstem from "./WT/WTNonstem";
import DMTStem from "./DMT/DMTStem";
import DMTNonstem from "./DMT/DMTNonstem";
import AFStem from "./AF/AFStem";
import AFNonstem from "./AF/AFNonstem";
import NFTStem from "./NFT/NFTStem";
import NFTNonstem from "./NFT/NFTNonstem";
import PMTStem from "./PMT/PMTStem";
import PMTNonstem from "./PMT/PMTNonstem";


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
        ) && <FTStem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Computer Science - NONSTEM"
        ) && <FTNonstem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Information Systems - STEM"
        ) && <CETStem/>}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Information Systems - NONSTEM"
        ) && <CETNonstem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Information Technology - STEM"
        ) && <CTStem />}
      </div>
      <div>
        {shouldRenderTable(
          "Bachelor of Science in Information Technology - NONSTEM"
        ) && <CTNonstem />}
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
