import GuestLayout from "@/Layouts/GuestLayout";
import InputError from "@/Components/InputError";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import { Link, Head, useForm } from "@inertiajs/react";

export default function ForgotPassword({ status }) {
    const { data, setData, post, processing, errors } = useForm({
        email: "",
    });

    const submit = (e) => {
        e.preventDefault();

        post(route("password.email"));
    };

    return (
        <GuestLayout>
            <Head title="Forgot Password" />
            <h1 className="text-4xl font-black text-center mb-4">
                Forgot Password
            </h1>
            <p className="text-center mb-4">
                Enter the email address associated with your account and we'll
                send you a link to reset your password.
            </p>
            {status && (
                <div className="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {status}
                </div>
            )}
            <form onSubmit={submit}>
                <TextInput
                    id="email"
                    type="email"
                    name="email"
                    value={data.email}
                    className="mt-1 block w-full"
                    isFocused={true}
                    onChange={(e) => setData("email", e.target.value)}
                />

                <InputError message={errors.email} className="mt-2" />

                <div className="flex items-center justify-end mt-5">
                    <PrimaryButton className="ms-4" disabled={processing}>
                        Continue
                    </PrimaryButton>
                </div>
                <p className="text-center mt-4">
                    Don't have an account?{" "}
                    <Link
                        href={route("register")}
                        className="underline text-sm text-black-600 dark:text-black-400 hover:text-gray-900 dark:hover:text-gray-100"
                    >
                        <span>Register</span>
                    </Link>
                </p>
            </form>
        </GuestLayout>
    );
}
