#include<iostream>
using namespace std;
int main()
{
	for (int a = 0;; a++)
	{
		if (((a * 8 + 7) * 8 + 1) * 8 + 1 == (34 * a + 15) * 17 + 4)
		{
			cout << (34 * a + 15) * 17 + 4 << endl;
			break;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}