#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		float a, b, c;
		cin >> a >> b >> c;
		if (a == 0)
		{
			cout << int(-c / b)<<endl;
		}
		else
		{
			int d = b*b - 4 * a*c;
			if (d > 0)
			{
				cout <<int( (-b - sqrt(d)) / (a * 2)) << " " <<int( (-b + sqrt(d)) / (a * 2)) << endl;
			}
			else if (d == 0)
			{
				cout << int((-b + sqrt(d)) / (a * 2)) << endl;
			}
			else
			{
				cout << "no root\n";
			}
		}
	}
	return 0;
}