from genericpath import isdir
import os;
import shutil;
import re;

folders = next(os.walk(os.getcwd()))[1];
finalDir = os.path.join(os.getcwd(), "final/components/");
# create finalDir if not exists
if not os.path.exists(finalDir):
    os.makedirs(finalDir)

projects = [];
# get project folders
for folder in folders:
    # remove hidden folders
    if re.search("^\.", folder):
        continue
    if not os.path.isdir(os.path.join(os.getcwd(), folder)):
        continue
    projects.append(folder)
# get components
components = []
for project in projects:
    path = os.path.join(os.getcwd(), project, "dist/final/components")
    if not os.path.exists(path):
        continue
    components.append(path)
# copy components to finalDir
for component in components:
    shutil.copytree(os.path.join(os.getcwd(), component), finalDir, dirs_exist_ok=True)
        
print(components);