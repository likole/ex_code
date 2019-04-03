#include<iostream>
#include<string>
#include<cmath>
#include<iomanip>
const double PI = 3.141592653;
using namespace std;
int main()
{
	double pos_x=0, pos_y=0, angle = 0;
	string str;
	while (cin >> str)
	{
		if (str == "dead")break;
		if (str == "move")
		{
			int s;
			cin >> s;
			pos_x += s*cos(angle);
			pos_y += s*sin(angle);
		}
		else
		{
			int t;
			cin >> t;
			angle += t*PI/180;
		}
	}
	cout << "xiaoqiang is (" << fixed << setprecision(2) << pos_x << "," << pos_y << ")";
}