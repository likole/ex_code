#include<iostream>
#include<cmath>
#include<string>
#include<cstdlib>
#include<iomanip>
using namespace std;
const double pi = acos(-1);
int main()
{
	int n,casenum=1;
	string instruction;
	while (cin>>n)
	{
		double x=0, y=0, angle = 0;
		for (int i = 0; i < n; i++)
		{
			cin >> instruction;
			if (instruction == "Forward")
			{
				double t;
				cin >> t;
				x += t*cos(angle);
				y += t*sin(angle);
			}
			else
			{
				double t;
				cin >> t;
				angle += pi*t / 180;
			}
		}
		cout << "Case " << casenum++ << ": " << fixed << setprecision(2) << x << " " << y << endl;
	}
}