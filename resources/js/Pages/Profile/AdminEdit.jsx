import AdminDeleteUserForm from "./Partials/AdminDeleteUserForm";
import AdminUpdatePasswordForm from "./Partials/AdminUpdatePasswordForm";
import AdminUpdateProfileInformationForm from "./Partials/AdminUpdateProfileInformationForm";
import { Head } from "@inertiajs/react";
import AdminAuthenticated from "@/Layouts/AdminAuthenticatedLayout";

export default function Edit({ auth, mustVerifyEmail, status }) {
    return (
        <AdminAuthenticated
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Profile
                </h2>
            }
        >
            <Head title="Profile" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <AdminUpdateProfileInformationForm
                            mustVerifyEmail={mustVerifyEmail}
                            status={status}
                            className="max-w-xl"
                        />
                    </div>

                    <div className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <AdminUpdatePasswordForm className="max-w-xl" />
                    </div>

                    <div className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <AdminDeleteUserForm className="max-w-xl" />
                    </div>
                </div>
            </div>
        </AdminAuthenticated>
    );
}