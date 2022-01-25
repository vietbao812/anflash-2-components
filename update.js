const {exec} = require("child_process");
const fs = require("fs");
const path = require("path");

let folderName = "HomeContent-LeThanhNhan";
if (fs.existsSync(path.resolve(__dirname, folderName))){
    throw "Component group already exists"
}

let commands = [
    `git clone https://github.com/tunanyugen/component-maker.git ${folderName}`,
    `cd ${folderName}`,
    `npm run setup`,
    `npm run update`,
    `npm run make-component -- --name=HomeVR --description="VR section in home page"`,
    `npm run make-component -- --name=HomeWebDevelopment --description="Web development section in home page"`,
    `npm run make-component -- --name=HomeGraphicsAndBranding --description="Graphics and branding section in home page"`,
    `npm run make-component -- --name=HomeMedia --description="Media section in home page"`,
]

let final = "";
commands.forEach((command, index) => {
    if (index > 0){
        final += " && "
    }
    final += command
})

exec(final, (error, stdout, stderr) => {
    if (error) {
        console.log(`error: ${error.message}`);
        return;
    }
    if (stderr) {
        console.log(`stderr: ${stderr}`);
        return;
    }
    console.log(`stdout: ${stdout}`);
});
