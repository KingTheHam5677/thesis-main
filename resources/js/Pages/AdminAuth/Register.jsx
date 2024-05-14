import { useEffect } from "react";
import GuestLayout from "@/Layouts/GuestLayout";
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import { Head, Link, useForm } from "@inertiajs/react";
import Header from "@/Components/Header/Header";

export default function AdminRegister() {
  const { data, setData, post, processing, errors, reset } = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    college: "", // Add college field
  });

  useEffect(() => {
    return () => {
      reset("password", "password_confirmation");
    };
  }, []);

  const submit = (e) => {
    e.preventDefault();

    post(route("admin.register")); // Use the admin register route
  };

  return (
    <div>
      <Header />
      <GuestLayout>
        <Head title="Admin Register" /> {/* Update the title */}
        <form onSubmit={submit}>
          <h1 className="text-4xl font-black text-center mb-4">
            Create Faculty Account {/* Update heading */}
          </h1>
          <div>
            <InputLabel htmlFor="name" value="Name" />

            <TextInput
              id="name"
              name="name"
              value={data.name}
              className="mt-1 block w-full"
              autoComplete="name"
              isFocused={true}
              onChange={(e) => setData("name", e.target.value)}
              required
            />

            <InputError message={errors.name} className="mt-2" />
          </div>

          <div className="mt-4">
            <InputLabel htmlFor="email" value="Email" />

            <TextInput
              id="email"
              type="email"
              name="email"
              value={data.email}
              className="mt-1 block w-full"
              autoComplete="username"
              onChange={(e) => setData("email", e.target.value)}
              required
            />

            <InputError message={errors.email} className="mt-2" />
          </div>

          <div className="mt-4 ">
            <InputLabel htmlFor="college" value="College" />
            <select
              id="college"
              name="college"
              value={data.college}
              className="mt-1 block w-full border border-red-300 dark:border-red-700 dark:bg-red-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm"
              onChange={(e) => setData("college", e.target.value)}
              required
            >
              <option value="">Select College</option>
              <option value="COS">College of Science</option>
              <option value="COE">College of Engineering</option>
              <option value="CAFA">
                College of Architecture and Fine Arts
              </option>
              <option value="CIT">College of Industrial Technology</option>
              <option value="CIE">College of Industrial Education</option>
              <option value="CLA">College of Liberal Arts</option>
            </select>
            <InputError message={errors.college} className="mt-2" />
          </div>

          <div className="mt-4">
            <InputLabel htmlFor="password" value="Password" />

            <TextInput
              id="password"
              type="password"
              name="password"
              value={data.password}
              className="mt-1 block w-full"
              autoComplete="new-password"
              onChange={(e) => setData("password", e.target.value)}
              required
            />

            <InputError message={errors.password} className="mt-2" />
          </div>

          <div className="mt-4">
            <InputLabel
              htmlFor="password_confirmation"
              value="Confirm Password"
            />

            <TextInput
              id="password_confirmation"
              type="password"
              name="password_confirmation"
              value={data.password_confirmation}
              className="mt-1 block w-full"
              autoComplete="new-password"
              onChange={(e) => setData("password_confirmation", e.target.value)}
              required
            />

            <InputError
              message={errors.password_confirmation}
              className="mt-2"
            />
          </div>
          <PrimaryButton className="mt-5" disabled={processing}>
            Register
          </PrimaryButton>
          <div className="text-center mt-4">
            <p>
              Already have an faculty account?{" "}
              <Link
                href={route("admin.login")} // Link to admin login
                className="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100"
              >
                <span>Login</span>
              </Link>
            </p>
          </div>
        </form>
      </GuestLayout>
    </div>
  );
}
