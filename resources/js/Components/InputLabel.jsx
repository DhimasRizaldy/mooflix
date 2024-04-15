import React from "react";

export default function InputLabel({
    forInput,
    value,
    className = "",
    children,
}) {
    return (
        <Label
            htmlFor={forInput}
            className={`text-base block mb-2` + className}
        >
            {value ? value : children}
        </Label>
    );
}
