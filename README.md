# Termux repository of X/GUI packages
This is unofficial [Termux](https://github.com/termux/termux-app) repository that contains various X/GUI packages such as **dosbox**.
Build scripts and patches are located in [my 'termux-packages' repository](https://github.com/xeffyr/termux-packages/tree/termux-x-packages).

**WARNING:** Starting from Android version 8.0, some X packages will not work due to seccomp. You will get 'Bad system call' error or something similar when you will try to execute programs. Currently, there is no way to avoid this.

## How to enable this repository
Download and run a [script](https://github.com/xeffyr/termux-x-repository/blob/master/enablerepo.sh) that will automatically add repository to your 'sources.list' file and add public key:
```
wget https://raw.githubusercontent.com/xeffyr/termux-x-repository/master/enablerepo.sh
bash enablerepo.sh
```

To disable repository you need to edit your sources.list file or run the following commands:
```
wget https://raw.githubusercontent.com/xeffyr/termux-x-repository/master/disablerepo.sh
bash disablerepo.sh
```

## How to run X packages
1. Install package 'termux-desktop' from this repository: `pkg install termux-desktop`. This will provide an Openbox environment with some programs preinstalled.
2. Install VNC viewer. You can use this: https://play.google.com/store/apps/details?id=com.realvnc.viewer.android
3. Create a new session in Termux and type: `startx`. On first launch you will be prompted for setting up a VNC password.
Output of startx should contain something like this 'New ... desktop is localhost:1'. At this point, openbox session will
be launched.
4. Open VNC viewer application and create a new connection to the host 127.0.0.1:5901. Use password entered in step 2 and you will see a desktop.

If you want to launch a X program directly from the Termux, make sure that a variable DISPLAY set to correct display:
```
export DISPLAY=:1
```

To use X packages with [Xserver XSDL](https://play.google.com/store/apps/details?id=x.org.server) application, you need to set the following environment variables:
```
export DISPLAY=localhost:0
export PULSE_SERVER=localhost:4712
```

and then you can start Openbox session:
```
bash -c "openbox-session &"
```
