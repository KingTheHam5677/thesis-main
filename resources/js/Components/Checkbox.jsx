export default function Checkbox({ className = "", ...props }) {
    return (
        <input
            {...props}
            type="checkbox"
            className={
                "rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-black-600" +
                className
            }
        />
    );
}
