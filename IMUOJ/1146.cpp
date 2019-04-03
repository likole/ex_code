#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int n;
	cin >> n;
	double t = 0;
	for (int i = 1; i <= n; i++)
	{
		t += (double)1 / i;
	}
	cout << fixed << setprecision(6) << t << " ";
	//cin.get();
	//cin.get();
	return 0;
}