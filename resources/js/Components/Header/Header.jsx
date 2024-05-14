import React from "react";
import header from "../../../../public/images/header.png";
import "./Header.css";

const Header = () => {
    return (
        <div className="header">
            <img src={header} alt="" />
        </div>
    );
};

export default Header;
