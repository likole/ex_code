#include<iostream>
#include<iomanip>
using namespace std;
const double PI = 3.1415;
int main()
{
	int n;
	cin >> n;
	double r;
	for (int i = 0; i < n; i++)
	{
		cin >> r;
		cout << fixed << setprecision(6) << (PI*r*r)<<endl;
	}
	//cin.get();
	//cin.get();
}