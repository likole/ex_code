#include<iostream>
#include<cmath>
#include<iomanip>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		float x,y;
		cin >> x;
		if (x < -2) y = x*x - sin(x);
		else if (x>2) y = sqrt(x*x + x + 1);
		else y = pow(2, x) + x;
		cout << fixed << setprecision(2) << y<<endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}