import AdminAuthenticated from "@/Layouts/AdminAuthenticatedLayout";
import { Head } from "@inertiajs/react";
import COSIndex from "./Semester/COS/COSIndex";

export default function Curriculum({ auth }) {
  const collegeDept = auth.user.college;

  return (
    <>
      {collegeDept === "COS" ? (
        <COSIndex auth={auth} />
      ) : (
        <div className="py-12">
          <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 text-gray-900 dark:text-gray-100">
                Curriculum for your college department is not found.
              </div>
            </div>
          </div>
        </div>
      )}
    </>
  );
}
