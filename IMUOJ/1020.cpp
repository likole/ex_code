#include<iostream>
using namespace std;
int main()
{
	long p,bonus;
	cin >> p;
	switch (p/100000)
	{
	case 0:
		bonus = p*0.1;
		break;
	case 1:
		bonus = 10000 + (p - 100000)*0.075;
		break;
	case 2:
	case 3:
		bonus = 17500 + (p - 200000)*0.05;
		break;
	case 4:
	case 5:
		bonus = 27500 + (p - 400000)*0.03;
		break;
	case 6:
	case 7:
	case 8:
	case 9:
		bonus = 33500 + (p - 600000)*0.015;
		break;
	default:
		bonus = 39500 + (p - 1000000)*0.075;
		break;
	}
	cout << bonus << endl;
	//cin.get();
	//cin.get();
	return 0;
}