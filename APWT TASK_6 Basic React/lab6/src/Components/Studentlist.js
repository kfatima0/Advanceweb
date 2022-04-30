import React from "react";
import {Link} from "react-router-dom";
import Student from './Student';
const Studentlist = () => {
    return(

        <div>
                <Link to="/1"><Student name="nayma" id ="1" cgpa ="3.5"/></Link>
                <Link to="/2"><Student name="zia" id ="2" cgpa ="3.7"/></Link>
                <Link to="/3"><Student name="alia" id ="3" cgpa="2.5"/></Link>
        </div>
    );
}
export default Studentlist;
