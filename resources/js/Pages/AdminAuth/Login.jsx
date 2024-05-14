import { useEffect } from "react";
import Checkbox from "@/Components/Checkbox";
import GuestLayout from "@/Layouts/GuestLayout";
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import { Head, Link, useForm } from "@inertiajs/react";
import Header from "@/Components/Header/Header";

const AdminLogin = ({ status, canResetPassword }) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
        remember: false,
    });

    useEffect(() => {
        return () => {
            reset("password");
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();
        console.log("Remember me checked?", data.remember);
        post(route("admin.login")); // Use admin login route
    };

    return (
        <div>
            <Header />
            <GuestLayout>
                <Head title="Login" />

                {status && (
                    <div className="mb-4 font-medium text-sm text-green-600">
                        {status}
                    </div>
                )}

                <form onSubmit={submit}>
                    <h1 className="text-3xl font-black text-center mb-4">
                        Faculty Access Module
                    </h1>
                    <div>
                        <InputLabel htmlFor="email" value="Email" />
                        <TextInput
                            id="email"
                            type="email"
                            name="email"
                            value={data.email}
                            className="mt-1 block w-full"
                            autoComplete="username"
                            isFocused={true}
                            onChange={(e) => setData("email", e.target.value)}
                        />
                        <InputError message={errors.email} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="password" value="Password" />
                        <TextInput
                            id="password"
                            type="password"
                            name="password"
                            value={data.password}
                            className="mt-1 block w-full"
                            autoComplete="current-password"
                            onChange={(e) =>
                                setData("password", e.target.value)
                            }
                        />
                        <InputError
                            message={errors.password}
                            className="mt-2"
                        />
                    </div>

                    <div className="block mt-4">
                        <div className="flex items-center justify-between">
                            <label className="flex items-center">
                                <Checkbox
                                    name="remember"
                                    checked={data.remember}
                                    onChange={(e) =>
                                        setData("remember", e.target.checked)
                                    }
                                />
                                <span className="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                    Remember me
                                </span>
                            </label>
                            {canResetPassword && (
                                <Link
                                    href={route("admin.password.request")}
                                    className="underline text-sm text-black-600 dark:text-black-400 hover:text-gray-900 dark:hover:text-gray-100"
                                >
                                    Forgot your password?
                                </Link>
                            )}
                        </div>

                        <PrimaryButton className="mt-5" disabled={processing}>
                            Log in
                        </PrimaryButton>

                        <p className="text-center mt-4">
                            Don't have an account?{" "}
                            <Link
                                href={route("admin.register")}
                                className="underline text-sm text-black-600 dark:text-black-400 hover:text-gray-900 dark:hover:text-gray-100"
                            >
                                Register
                            </Link>
                        </p>
                    </div>
                </form>
            </GuestLayout>
        </div>
    );
};

export default AdminLogin;
