# RTADgainer

Created for RT Developers


## How to contribute

1. Fork the main repository and clone locally

    `git clone https://github.com/YOUR_USERNAME/RTADgainer.git`

    example: 

    `git clone https://github.com/RTChetanChouhan/RTADgainer.git`

    `cd RTADgainer`

2. Create / copy .env file and and install packages

    `composer install`

3. Set `user.name` and `user.email` locally (skip this if you use same user as globally)

    `git config user.name "YOUR_USERNAME"`

    `git config user.email "YOUR_EMAIL"`
    
    example :

    `git config user.name "RTChetanChouhan"`

    `git config user.email "ChetanChohan@rututechnologies.com"`

4. create upstream remote (main repo) and sync your local copy before you branch.

    `git remote add upstream https://github.com/Adgainer/RTADgainer.git`

    run this command to see remote list

    `git remote -v`

    sync (ensure you're on the master branch): 

    `git pull upstream master`
    
    `git push origin master`

5. create branch for each separate piece of work. You can name your branch whatever you like, but it helps for it to be meaningful.

    `git checkout -b YOUR_BRANCH_NAME`

6. Do the work and make commit

    `git add .`

    `git commit -m "YOUR COMMIT MESSAGE"`

7. push your branch to origin repository (in private account)

    `git push -u origin YOUR_BRANCH NAME`

    or this is for existing branch

    `git push origin YOUR_BRANCH_NAME`

8. Make a pull request to main repository in github

9. The moderator will approve and merge it to master branch (main repository)

10. sync our master branch locally

    ensure you're on the master branch or checkout to master:

    `git checkout master`

    sync :

    `git pull upstream master`
    
    `git push origin master`

11. ensure everything was merged then you can delete your branch

    `git branch -d YOUR_BRANCH_NAME`

    delete on origin repository

    `git push -d origin YOUR_BRANCH_NAME`

12. Create new branch and do other work (Step Number 5).